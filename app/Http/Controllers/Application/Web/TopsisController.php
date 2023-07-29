<?php

namespace App\Http\Controllers\Application\Web;

use App\Http\Controllers\Controller;
use App\Siswa;
use App\Kriteria;
use App\TopsisBobot;
use App\TopsisInisial;
use App\TopsisJarak;
use App\TopsisNormalisasi;
use App\TopsisPreferensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class TopsisController extends Controller
{
    /*
    * ******************************************************  ****************************************************** *
    * *********************************  This Function For Get Penilaian Beasiswa ********************************* *
    * ******************************************************  ****************************************************** *
    */
    public function penilaianAwal()
    {
        $siswas = Siswa::get();
        $kriterias = Kriteria::get();
        return view('application.web.topsis.nilai-awal.index', [
            'siswas' => $siswas,
            'kriterias' => $kriterias,
        ]);
    }

    public function storePenilaianAwal(Request $request)
    {
        $this->validate($request, [
            'nilai_awal' => 'required',
            'siswa_id' => 'required',
            'inisialisasi',
            'kriteria_id' => 'required',
        ]);
        $isexist = TopsisInisial::where('siswa_id', '=', $request->input('siswa_id'))
                                ->where('kriteria_id', '=', $request->input('kriteria_id'))
                                ->first();
        // dd($isexist);
        if ($isexist === null) {
            DB::transaction(function () use ($request) {
                $penilaians = new TopsisInisial;
                $penilaians->nilai_awal = $request->nilai_awal;
                $penilaians->siswa_id = $request->siswa_id;
                $penilaians->kriteria_id = $request->kriteria_id;
                // kriteria 1 = Pehasilan orang tua
                if ($request->kriteria_id == 1) {
                    if ($request->nilai_awal < 799999) {
                        $inisialisasi = 5;
                    } elseif ($request->nilai_awal >= 800000 && $request->nilai_awal <= 1499999) {
                        $inisialisasi = 4;
                    } elseif ($request->nilai_awal >= 1500000 && $request->nilai_awal <= 2999999) {
                        $inisialisasi = 3;
                    } elseif ($request->nilai_awal >= 3000000 && $request->nilai_awal <= 4999999) {
                        $inisialisasi = 2;
                    } elseif ($request->nilai_awal > 5000000 ) {
                        $inisialisasi = 1;
                    }else{
                         return redirect()
                                ->back()
                                ->with('error_message', 'silahkan cek data kembali!');
                    }
                // kriteria 2 = tanggungan orang tua
                } else if ($request->kriteria_id == 2) {
                    if ($request->nilai_awal >= 5) {
                        $inisialisasi = 5;
                    } elseif ($request->nilai_awal >= 4) {
                        $inisialisasi = 4;
                    } elseif ($request->nilai_awal >= 3) {
                        $inisialisasi = 3;
                    } elseif ($request->nilai_awal >= 2) {
                        $inisialisasi = 2;
                    } elseif ($request->nilai_awal >= 0) {
                        $inisialisasi = 1;
                    }else{
                         return redirect()
                                ->back()
                                ->with('error_message', 'silahkan cek data kembali!');
                    }
                    // kriteria 3 = kepemilikan kendaraan
                } else if ($request->kriteria_id == 3) {
                    if ($request->nilai_awal == "tidak ada") {
                        $inisialisasi = 5;
                    } elseif ($request->nilai_awal == "sepeda") {
                        $inisialisasi = 4;
                    } elseif ($request->nilai_awal == "motor") {
                        $inisialisasi = 3;
                    } elseif ($request->nilai_awal == "mobil") {
                        $inisialisasi = 2;
                    } elseif ($request->nilai_awal =="mobil dan motor") {
                        $inisialisasi = 1;
                    }else{
                         return redirect()
                                ->back()
                                ->with('error_message', 'pengisian data salah, silahkan cek kembali!');
                    }
                    // kriteria 4 = kehadiran
                } else if ($request->kriteria_id == 4) {
                    if ($request->nilai_awal >= 81 && $request->nilai_awal <= 100) {
                        $inisialisasi = 5;
                    } elseif ($request->nilai_awal >= 61 && $request->nilai_awal <= 80) {
                        $inisialisasi = 4;
                    } elseif ($request->nilai_awal >= 41 && $request->nilai_awal <= 60) {
                        $inisialisasi = 3;
                    } elseif ($request->nilai_awal >= 21 && $request->nilai_awal <= 40) {
                        $inisialisasi = 2;
                    } elseif ($request->nilai_awal >= 1 && $request->nilai_awal <= 20) {
                        $inisialisasi = 1;
                    }else{
                         return redirect()
                                ->back()
                                ->with('error_message', 'silahkan cek data kembali!');
                    }
                }else{
                    return with('error_message', 'Kriteria sudah tidak ada!');
                }
                $penilaians->inisialisasi = (int)$inisialisasi;

                $penilaians->save();
                // dd($penilaians);
            }, 5);
            return redirect()
                ->route('admin.penilaianAwal')
                ->with('success_message', 'data berahasil disimpan');
        } else {
            return redirect()
                ->back()
                ->with('error_message', 'data sudah ada!');
        }
    }

    public function editPenilaianAwal($id)
    {
        $siswas = Siswa::get();
        $kriterias = Kriteria::get();

        $penilaians = TopsisInisial::where('id', $id)->first();
        return view('application.web.topsis.nilai-awal.edit', [
            'penilaians' => $penilaians,
            'siswas' => $siswas,
            'kriterias' => $kriterias
        ]);
    }

    // public function updatePenilaianAwal(Request $request, $id)
    // {
    //     $checkExist = TopsisInisial::where('siswa_id', $request->siswa_id)
    //         ->where('criteria_id', $request->criteria_id)->first();


    //     if (!empty($checkExist)) {
    //         $topsesInisial = TopsisInisial::where('id', $id)->first();

    //         if ($request->kriteria_id == 1 || $request->kriteria_id == 4) {
    //             if ($request->nilai_awal >= 1 && $request->nilai_awal <= 6) {
    //                 $inisialisasi = 1;
    //             } elseif ($request->nilai_awal >= 7 && $request->nilai_awal <= 13) {
    //                 $inisialisasi = 2;
    //             } elseif ($request->nilai_awal >= 14 && $request->nilai_awal <= 20) {
    //                 $inisialisasi = 3;
    //             }
    //         } elseif ($request->kriteria_id == 2 || $request->kriteria_id == 3) {
    //             if ($request->nilai_awal >= 1 && $request->nilai_awal <= 10) {
    //                 $inisialisasi = 1;
    //             } elseif ($request->nilai_awal >= 11 && $request->nilai_awal <= 20) {
    //                 $inisialisasi = 2;
    //             } elseif ($request->nilai_awal >= 21 && $request->nilai_awal <= 30) {
    //                 $inisialisasi = 3;
    //             }
    //         }

    //         $topsesInisial->nilai_awal = $request->nilai_awal;
    //         $topsesInisial->inisialisasi = $inisialisasi;
    //         $topsesInisial->siswa_id = $request->siswa_id;
    //         $topsesInisial->kriteria_id = $request->kriteria_id;

    //         DB::transaction(function () use ($topsesInisial) {
    //             $topsesInisial->save();
    //         }, 5);

    //         return redirect()
    //             ->route('admin.penilaianAwal')
    //             ->with('success_message', 'data berahasil diubah');
    //     }
    //     return redirect()
    //         ->back()
    //         ->with('error_message', 'data sudah ada!');
    // }

    // public function destroyPenilaianAwal($id)
    // {
    //     $penilaians = TopsisInisial::where('id', $id)
    //         ->first();

    //     DB::transaction(function () use ($penilaians) {
    //         $penilaians->delete();
    //     }, 5);

    //     return redirect()
    //         ->back()
    //         ->with('success_message', 'data berahasil diubah');
    // }
    /*
    * ******************************************************  ****************************************************** *
    * ********************************* End - This Function For Beasiswa ********************************* *
    * ******************************************************  ****************************************************** *
    */

    /*
    * ******************************************************  ****************************************************** *
    * ************************************************* Get Topsis ************************************************* *
    * ******************************************************  ****************************************************** *
    */

    public function hasilNoramlasiasi()
    {
        $siswas = Siswa::get();
        $kriterias = Kriteria::get();
        $normalisasis = TopsisNormalisasi::get();

        return view('application.web.topsis.perhitungan-topsis.1-normalisasi', [
            'kriterias' => $kriterias,
            'siswas' => $siswas,
            'normalisasis' => $normalisasis,
        ]);
    }

    public function hasilPembobotan()
    {
        $siswas = Siswa::get();
        $kriterias = Kriteria::get();
        $pembobotans = TopsisBobot::get();
        return view('application.web.topsis.perhitungan-topsis.2-bobot', [
            'kriterias' => $kriterias,
            'siswas' => $siswas,
            'pembobotans' => $pembobotans
        ]);
    }

    public function hasilJarak()
    {
        $siswas = Siswa::get();
        $kriterias = Kriteria::get();
        $jaraks = TopsisJarak::get();

        return view('application.web.topsis.perhitungan-topsis.4-jarak', [
            'kriterias' => $kriterias,
            'siswas' => $siswas,
            'jaraks' => $jaraks
        ]);
    }

    public function hasilPreferensi()
    {
        $siswas = Siswa::get();
        $kriterias = Kriteria::get();
        $preferensis = TopsisPreferensi::get();

        return view('application.web.topsis.perhitungan-topsis.5-prefrensi', [
            'kriterias' => $kriterias,
            'siswas' => $siswas,
            'preferensis' => $preferensis,
        ]);
    }

    /*
    * ******************************************************  ****************************************************** *
    * ********************************************** End - Get Topsis ********************************************** *
    * ******************************************************  ****************************************************** *
    */

    /*
    * ******************************************************  ****************************************************** *
    * *********************************************** Proses Topsis ************************************************ *
    * ******************************************************  ****************************************************** *
    */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function storeNormalisasi(Request $request)
    {
        $getNormaliasai = TopsisNormalisasi::get();
        $siswa = [];
        $inisial = [];
        $kriteria = [];
        foreach ($getNormaliasai as $value) {
            $siswa = $value->siswa_id;
            $inisial = $value->inisial_id;
            $kriteria = $value->kriteria_id;
        };
        $isexist = TopsisNormalisasi::where('siswa_id', '=', $siswa)
                                ->orWhere('kriteria_id', '=', $kriteria)
                                ->orWhere('inisial_id', '=' ,$inisial )
                                ->first();

        if (!$isexist) {
            $criterias = Kriteria::all();
            foreach ($criterias as $criteria) {
                $initialValue = 0;

                $assessments = TopsisInisial::where('kriteria_id', '=', $criteria->id)->get();
                foreach ($assessments as $assessment) {
                    $pembagaian = pow($assessment->inisialisasi, 2);
                    $initialValue = $initialValue + $pembagaian;
                }
                $akar = sqrt($initialValue);
                foreach ($assessments as $assessment) {
                    $matrixNormalisasi = $assessment->inisialisasi / $akar;
                    $request->request->add(['topsis_normalisasi' => $matrixNormalisasi]);
                    $request->request->add(['inisial_id' => $assessment->id]);
                    $request->request->add(['kriteria_id' => $assessment->kriteria_id]);
                    $request->request->add(['siswa_id' => $assessment->siswa_id]);
                    DB::table('topsis_normalisasis')->insert($request->except('_token'));
                    // dd($matrixNormalisasi);
                }
            }
            return redirect()
                ->route('admin.normalisasi')
                ->with('success_message', "Berhasil Proses Matrix Normalisasi");
        }
        return redirect()
            ->back()
            ->with('error_message', 'data sudah ada!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeBobot(Request $request)
    {
        $getBobot = TopsisBobot::get();
        $siswa = [];
        $normal = [];
        $kriteria = [];
        foreach ($getBobot as $value) {
            $siswa = $value->siswa_id;
            $normal = $value->normalisasi_id;
            $kriteria = $value->kriteria_id;
        };
        $isexist = TopsisBobot::where('siswa_id', '=', $siswa)
                                ->orWhere('kriteria_id', '=', $kriteria)
                                ->orWhere('normalisasi_id', '=' ,$normal )
                                ->first();

        if (!$isexist) {
            //bobot
            $siswas = Siswa::all();
            foreach ($siswas as $siswa) {
                $matrixNormalisasi = DB::table('topsis_normalisasis')
                    ->join('kriterias', 'topsis_normalisasis.kriteria_id', '=', 'kriterias.id')
                    ->where('siswa_id', '=', $siswa->id)
                    ->get();
                foreach ($matrixNormalisasi as $normalisasi) {
                    $bobot = $normalisasi->weight / 100;
                    $hasil = $normalisasi->topsis_normalisasi * $bobot;

                    $request->request->add(['topsis_bobot' => $hasil]);

                    $request->request->add(['normalisasi_id' => $normalisasi->id]);
                    $request->request->add(['kriteria_id' => $normalisasi->kriteria_id]);
                    $request->request->add(['siswa_id' => $normalisasi->siswa_id]);

                    DB::table('topsis_bobots')->insert($request->except('_token'));
                }
            }
            return redirect()
                ->route('admin.bobot')
                ->with('success_message', "Berhasil Proses Matrix Pembobotan");
        }
        return redirect()
            ->back()
            ->with('error_message', 'data sudah ada!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeJarak(Request $request)
    {
        $getJarak = TopsisJarak::get();
        $siswa = [];
        $bobot = [];
        $kriteria = [];
        foreach ($getJarak as $value) {
            $siswa = $value->siswa_id;
            $bobot = $value->bobot_id;
            $kriteria = $value->kriteria_id;
        };
        $isexist = TopsisJarak::where('siswa_id', '=', $siswa)
                                ->orWhere('kriteria_id', '=', $kriteria)
                                ->orWhere('bobot_id', '=' ,$bobot )
                                ->first();

        if (!$isexist) {

            $siswas = Siswa::all();
            foreach ($siswas as $siswa) {
                $idealMax = 0;
                $idealMin = 0;
                $matrixBobot = DB::table('topsis_bobots')
                    ->where('siswa_id', '=', $siswa->id)
                    ->get();

                foreach ($matrixBobot as $bobot) {
                    $nilmax = DB::table('topsis_bobots')
                        ->where('kriteria_id', '=', $bobot->kriteria_id)
                        ->orderBy('topsis_bobot', 'desc')
                        ->first();
                    $hasilmax = $nilmax->topsis_bobot - $bobot->topsis_bobot;
                    $powhasilmax = pow($hasilmax, 2);
                    $idealMax = $idealMax + $powhasilmax;
                }
                $akarhasilmax = sqrt($idealMax);

                foreach ($matrixBobot as $bobot) {
                    $nilmin = DB::table('topsis_bobots')
                        ->where('kriteria_id', '=', $bobot->kriteria_id)
                        ->orderBy('topsis_bobot', 'asc')
                        ->first();
                    $hasilmin = $nilmin->topsis_bobot - $bobot->topsis_bobot;
                    $powhasilmin = pow($hasilmin, 2);
                    $idealMin = $idealMin + $powhasilmin;
                }
                $akarhasilmin = sqrt($idealMin);

                $request->request->add(['topsis_solusi_max' => $akarhasilmax]);
                $request->request->add(['topsis_solusi_min' => $akarhasilmin]);

                $request->request->add(['kriteria_id' => $bobot->kriteria_id]);
                $request->request->add(['siswa_id' => $bobot->siswa_id]);

                DB::table('topsis_jaraks')->insert($request->except('_token'));
            }

            return redirect()
                ->route('admin.jarak')
                ->with('success_message', "Berhasil Proses Matrix Jarak Ideal Min dan Max");
        }
        return redirect()
            ->back()
            ->with('error_message', 'data sudah ada!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePreferensi(Request $request)
    {
        $getPref = TopsisPreferensi::get();
        $siswa = [];
        $jarak = [];
        $kriteria = [];
        foreach ($getPref as $value) {
            $siswa = $value->siswa_id;
            $jarak = $value->jarak_id;
            $kriteria = $value->kriteria_id;
        };
        $isexist = TopsisPreferensi::where('siswa_id', '=', $siswa)
                                ->orWhere('kriteria_id', '=', $kriteria)
                                ->orWhere('jarak_id', '=' ,$jarak )
                                ->first();

        if (!$isexist) {
         $siswas = Siswa::get();
            foreach ($siswas as $siswa) {
                $matrixJarak = DB::table('topsis_jaraks')
                    ->where('siswa_id', '=', $siswa->id)
                    ->get();

                foreach ($matrixJarak as $jarak) {
                    $hasilPref = $jarak->topsis_solusi_min / ($jarak->topsis_solusi_max + $jarak->topsis_solusi_min);
                }

                $request->request->add(['topsis_preferensi' => $hasilPref]);

                $request->request->add(['jarak_id' => $jarak->id]);
                $request->request->add(['kriteria_id' => $jarak->kriteria_id]);
                $request->request->add(['siswa_id' => $jarak->siswa_id]);
                DB::table('topsis_preferensis')->insert($request->except('_token'));
            }
            return redirect()
                ->route('admin.preferensi')
                ->with('success_message', "Berhasil Proses Matrix Jarak Ideal Min dan Max");
        }
        return redirect()
            ->back()
            ->with('error_message', 'data sudah ada!');
    }
}
