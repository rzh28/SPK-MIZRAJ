<?php

use App\Siswa;
use App\Kriteria;
use App\Role;
use App\Topsis;
use App\TopsisInisial;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        * @array created Users
        */
        // Create Users Login ------------------------------------------------------------------------------------------------------------
        $users = [
            // Users 1
            ['name' => 'administrasi', 'email' => 'admin@mail.com', 'password' => bcrypt('password'), 'role_id' => 1,],
            // Users 2
            ['name' => 'Human Resource Development', 'email' => 'hrd@mail.com', 'password' => bcrypt('password'), 'role_id' => 2,],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }


        /*
        * @array created Role
        */
        // Created Role ------------------------------------------------------------------------------------------------------------------
        $roles = [
            // Role 1
            ['name' => 'administrasi',],
            // Role 2
            ['name' => 'hrd',],
        ];

        foreach ($roles as $key => $role) {
            Role::create($role);
        }


        /*
        * @array created Siswas
        */
        // Created Siswas --------------------------------------------------------------------------------------------------------------
        $siswas = [
            // Siswa I
            [
                'photos' => null,
                'nama' => 'DIDIK ILHAM KURNIAWAN',
                'nisn' => '0116316704',
                'jenis_kelamin' => '1',
                'tempat_lahir' => 'SALATIGA',
                'tanggal_lahir' => '2011-03-31',
                'alamat' => 'PAPANGGO II Gg.DEWI SHINTA NO.5C RT.002/003',
                'agama' => '1',
                'kelas' => 'VII.A',
                'no_tlp_siswa' => '08xx-xxxx-xxx',
                'nama_ayah' => 'DIDIK MARYONO',
                'pekerjaan_ayah' => 'Pegawai Swasta',
                'nama_ibu' => 'Fatimah',
                'pekerjaan_ibu' => 'Ibu Rumah Tangga',
                'no_tlp_ortu' => '08xx-xxxx-xxx',
                'nama_wali' => 'Wani',
                'pekerjaan_wali' => 'Lainnya',
                'no_tlp_wali' => '08xx-xxxx-xxx',
            ],
            // Siswa I
            [
                'photos' => null,
                'nama' => 'UMMU SYAHIDAH',
                'nisn' => '0095251486',
                'jenis_kelamin' => '2',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '2009-07-27',
                'alamat' => 'JL.RAWAMANGUN MUKA NO.17 RT.3/14',
                'agama' => '1',
                'kelas' => 'VII.A',
                'no_tlp_siswa' => '08xx-xxxx-xxx',
                'nama_ayah' => 'ASEP ALI SAEFULLAH',
                'pekerjaan_ayah' => 'PEGAWAI SWASTA',
                'nama_ibu' => 'Dina',
                'pekerjaan_ibu' => 'Ibu Rumah Tangga',
                'no_tlp_ortu' => '08xx-xxxx-xxx',
                'nama_wali' => 'Tina',
                'pekerjaan_wali' => 'Lainnya',
                'no_tlp_wali' => '08xx-xxxx-xxx',
            ],
            // Siswa I
            [
                'photos' => null,
                'nama' => 'AQILA AZKA BACHRI',
                'nisn' => '0091485572',
                'jenis_kelamin' => '2',
                'tempat_lahir' => 'JAKARTA',
                'tanggal_lahir' => '2009-10-01',
                'alamat' => 'JL.MANGGA VI NO.7 RT.003/006',
                'agama' => '1',
                'kelas' => 'VII.B',
                'no_tlp_siswa' => '08xx-xxxx-xxx',
                'nama_ayah' => 'ADITYA ACHMAD BACHRI',
                'pekerjaan_ayah' => 'Dagang',
                'nama_ibu' => 'Siti',
                'pekerjaan_ibu' => 'Ibu Rumah Tangga',
                'no_tlp_ortu' => '08xx-xxxx-xxx',
                'nama_wali' => 'Ferren',
                'pekerjaan_wali' => 'Lainnya',
                'no_tlp_wali' => '08xx-xxxx-xxx',
            ],
            // Siswa I
            [
                'photos' => null,
                'nama' => 'ANDRE WIJAYA',
                'nisn' => '0099730562',
                'jenis_kelamin' => '1',
                'tempat_lahir' => 'TANGKIT BATU',
                'tanggal_lahir' => '2009-10-03',
                'alamat' => 'DUSUN TANGKIT BATU RT.010/005 LAMPUNG SELATAN',
                'agama' => '1',
                'kelas' => 'VII.B',
                'no_tlp_siswa' => '08xx-xxxx-xxx',
                'nama_ayah' => 'MARSUDI',
                'pekerjaan_ayah' => 'PEGAWAI SWASTA',
                'nama_ibu' => 'Rara',
                'pekerjaan_ibu' => 'Ibu Rumah Tangga',
                'no_tlp_ortu' => '08xx-xxxx-xxx',
                'nama_wali' => 'Tika',
                'pekerjaan_wali' => 'Lainnya',
                'no_tlp_wali' => '08xx-xxxx-xxx',
            ],
            // Siswa I
            [
                'photos' => null,
                'nama' => 'NUR SYIFA RAMADAHNI',
                'nisn' => '0092459232',
                'jenis_kelamin' => '2',
                'tempat_lahir' => 'SURAKARTA',
                'tanggal_lahir' => '2009-08-26',
                'alamat' => 'JL.PISANGAN BARU RT.008/005',
                'agama' => '1',
                'kelas' => 'VII.C',
                'no_tlp_siswa' => '08xx-xxxx-xxx',
                'nama_ayah' => 'PRANOWO',
                'pekerjaan_ayah' => 'PEGAWAI SWASTA',
                'nama_ibu' => 'Fatimah',
                'pekerjaan_ibu' => 'Ibu Rumah Tangga',
                'no_tlp_ortu' => '08xx-xxxx-xxx',
                'nama_wali' => 'Dina',
                'pekerjaan_wali' => 'Lainnya',
                'no_tlp_wali' => '08xx-xxxx-xxx',
            ],
            // Siswa I
            [
                'photos' => null,
                'nama' => 'ATAYA IRSYAD RIZQULLAH',
                'nisn' => '0108453666',
                'jenis_kelamin' => '1',
                'tempat_lahir' => 'JAKARTA',
                'tanggal_lahir' => '2010-01-17',
                'alamat' => 'KP PISANGAN RT.004/004',
                'agama' => '1',
                'kelas' => 'VII.C',
                'no_tlp_siswa' => '08xx-xxxx-xxx',
                'nama_ayah' => 'RAHMAT YUNIAR',
                'pekerjaan_ayah' => 'PEGAWAI SWASTA',
                'nama_ibu' => 'ANISSA ZAFIRAH',
                'pekerjaan_ibu' => 'Ibu Rumah Tangga',
                'no_tlp_ortu' => '08xx-xxxx-xxx',
                'nama_wali' => 'ZAFIRAH',
                'pekerjaan_wali' => 'Lainnya',
                'no_tlp_wali' => '08xx-xxxx-xxx',
            ],
            // Siswa I
            [
                'photos' => null,
                'nama' => 'AQILA AZKA ANDIASTI',
                'nisn' => '0092173312',
                'jenis_kelamin' => '2',
                'tempat_lahir' => 'PAYAKUMBUH',
                'tanggal_lahir' => '2009-10-04',
                'alamat' => 'JL TUTUL IV NO.369 RT.8/11',
                'agama' => '1',
                'kelas' => 'VII.D',
                'no_tlp_siswa' => '08xx-xxxx-xxx',
                'nama_ayah' => 'DAFITRI ANDI',
                'pekerjaan_ayah' => 'PEGAWAI SWASTA',
                'nama_ibu' => 'YULIA',
                'pekerjaan_ibu' => 'Ibu Rumah Tangga',
                'no_tlp_ortu' => '08xx-xxxx-xxx',
                'nama_wali' => 'MAHMUD',
                'pekerjaan_wali' => 'Lainnya',
                'no_tlp_wali' => '08xx-xxxx-xxx',
            ],
            // Siswa I
            [
                'photos' => null,
                'nama' => 'AZZAM LEE RIZQULLAH',
                'nisn' => '0096613499',
                'jenis_kelamin' => '1',
                'tempat_lahir' => 'JAKARTA',
                'tanggal_lahir' => '2009-08-04',
                'alamat' => 'JL. PENGGALANG 1 NO.9 RT.4/10',
                'agama' => '1',
                'kelas' => 'VII.D',
                'no_tlp_siswa' => '08xx-xxxx-xxx',
                'nama_ayah' => 'AFRIZAL HAMID',
                'pekerjaan_ayah' => 'PEGAWAI SWASTA',
                'nama_ibu' => 'RIKA AFRIANI',
                'pekerjaan_ibu' => 'Ibu Rumah Tangga',
                'no_tlp_ortu' => '08xx-xxxx-xxx',
                'nama_wali' => 'RIDHO',
                'pekerjaan_wali' => 'Lainnya',
                'no_tlp_wali' => '08xx-xxxx-xxx',
            ],
            // Siswa I
            [
                'photos' => null,
                'nama' => 'ANGGA WIJAYA',
                'nisn' => '0085701618',
                'jenis_kelamin' => '1',
                'tempat_lahir' => 'BANJARSARI',
                'tanggal_lahir' => '2008-10-14',
                'alamat' => 'JL RUKEM II NO.13 RT.9/9',
                'agama' => '1',
                'kelas' => 'VII.E',
                'no_tlp_siswa' => '08xx-xxxx-xxx',
                'nama_ayah' => 'TOHIRIN',
                'pekerjaan_ayah' => 'PEGAWAI SWASTA',
                'nama_ibu' => 'DARA SYAIDAH',
                'pekerjaan_ibu' => 'Ibu Rumah Tangga',
                'no_tlp_ortu' => '08xx-xxxx-xxx',
                'nama_wali' => 'ANGGI',
                'pekerjaan_wali' => 'Lainnya',
                'no_tlp_wali' => '08xx-xxxx-xxx',
            ],
            // Siswa I
            [
                'photos' => null,
                'nama' => 'BUNGA DEASS BUANA',
                'nisn' => '0099909489',
                'jenis_kelamin' => '2',
                'tempat_lahir' => 'JAKARTA',
                'tanggal_lahir' => '2009-04-02',
                'alamat' => 'PISANGAN TIMUR RT.5/11',
                'agama' => '1',
                'kelas' => 'VII.E',
                'no_tlp_siswa' => '08xx-xxxx-xxx',
                'nama_ayah' => 'ADEL BUANA',
                'pekerjaan_ayah' => 'PEGAWAI SWASTA',
                'nama_ibu' => 'ARKINI SABRINA',
                'pekerjaan_ibu' => 'Ibu Rumah Tangga',
                'no_tlp_ortu' => '08xx-xxxx-xxx',
                'nama_wali' => 'CINDY',
                'pekerjaan_wali' => 'Lainnya',
                'no_tlp_wali' => '08xx-xxxx-xxx',
            ],
        ];

        foreach ($siswas as $key => $siswa) {
            Siswa::create($siswa);
        }

        /*
        * @array created Kriteria
        */
        // Created Kriteria ------------------------------------------------------------------------------------------------------------
        $kriterias = [
            ['name' => 'Pendapatan Orang Tua', 'weight' => 40],
            ['name' => 'Tanggungan Orang Tua', 'weight' => 30],
            ['name' => 'Kepemilikan Kendaraan', 'weight' => 20],
            ['name' => 'Kehadiran', 'weight' => 10],
        ];
        foreach ($kriterias as $key => $kriteria) {
            Kriteria::create($kriteria);
        }

        /*
        * @array created Penilaian
        */
        // Created Penilaian -----------------------------------------------------------------------------------------------------------
        $penilaians = [
            // Siswa 1
            ['nilai_awal' => 2500000, 'inisialisasi' => 3, 'siswa_id' => 1, 'kriteria_id' => 1],
            ['nilai_awal' => 6, 'inisialisasi' => 5, 'siswa_id' => 1, 'kriteria_id' => 2],
            ['nilai_awal' => "motor", 'inisialisasi' => 3, 'siswa_id' => 1, 'kriteria_id' => 3],
            ['nilai_awal' => 96, 'inisialisasi' => 5, 'siswa_id' => 1, 'kriteria_id' => 4],
            // Siswa 2
            ['nilai_awal' => 800000, 'inisialisasi' => 5, 'siswa_id' => 2, 'kriteria_id' => 1],
            ['nilai_awal' => 3, 'inisialisasi' => 3, 'siswa_id' => 2, 'kriteria_id' => 2],
            ['nilai_awal' => "tidak ada", 'inisialisasi' => 5, 'siswa_id' => 2, 'kriteria_id' => 3],
            ['nilai_awal' => 95, 'inisialisasi' => 5, 'siswa_id' => 2, 'kriteria_id' => 4],
            // Siswa 3
            ['nilai_awal' => 1300000, 'inisialisasi' => 4, 'siswa_id' => 3, 'kriteria_id' => 1],
            ['nilai_awal' => 2, 'inisialisasi' => 2, 'siswa_id' => 3, 'kriteria_id' => 2],
            ['nilai_awal' => "motor", 'inisialisasi' => 3, 'siswa_id' => 3, 'kriteria_id' => 3],
            ['nilai_awal' => 80, 'inisialisasi' => 4, 'siswa_id' => 3, 'kriteria_id' => 4],
            // Siswa 4
            ['nilai_awal' => 5000000, 'inisialisasi' => 1, 'siswa_id' => 4, 'kriteria_id' => 1],
            ['nilai_awal' => 1, 'inisialisasi' => 1, 'siswa_id' => 4, 'kriteria_id' => 2],
            ['nilai_awal' => "mobil", 'inisialisasi' => 2, 'siswa_id' => 4,'kriteria_id' => 3],
            ['nilai_awal' => 85, 'inisialisasi' => 5, 'siswa_id' => 4, 'kriteria_id' => 4],
            // Siswa 5
            ['nilai_awal' => 2000000, 'inisialisasi' => 3, 'siswa_id' => 5, 'kriteria_id' => 1],
            ['nilai_awal' => 2, 'inisialisasi' => 2, 'siswa_id' => 5, 'kriteria_id' => 2],
            ['nilai_awal' => "motor", 'inisialisasi' => 3, 'siswa_id' => 5, 'kriteria_id' => 3],
            ['nilai_awal' => 90, 'inisialisasi' => 5, 'siswa_id' => 5, 'kriteria_id' => 4],
            // Siswa 6
            ['nilai_awal' => 3250000, 'inisialisasi' => 2, 'siswa_id' => 6, 'kriteria_id' => 1],
            ['nilai_awal' => 2, 'inisialisasi' => 2, 'siswa_id' => 6, 'kriteria_id' => 2],
            ['nilai_awal' => "motor", 'inisialisasi' => 3, 'siswa_id' => 6, 'kriteria_id' => 3],
            ['nilai_awal' => 94, 'inisialisasi' => 5, 'siswa_id' => 6, 'kriteria_id' => 4],
            // Siswa 7
            ['nilai_awal' => 4500000, 'inisialisasi' => 2, 'siswa_id' => 7, 'kriteria_id' => 1],
            ['nilai_awal' => 2, 'inisialisasi' => 2, 'siswa_id' => 7, 'kriteria_id' => 2],
            ['nilai_awal' => "motor", 'inisialisasi' => 3, 'siswa_id' => 7, 'kriteria_id' => 3],
            ['nilai_awal' => 97, 'inisialisasi' => 5, 'siswa_id' => 7, 'kriteria_id' => 4],
            // Siswa 8
            ['nilai_awal' => 2500000, 'inisialisasi' => 2, 'siswa_id' => 8, 'kriteria_id' => 1],
            ['nilai_awal' => 3, 'inisialisasi' => 3, 'siswa_id' => 8, 'kriteria_id' => 2],
            ['nilai_awal' => "motor", 'inisialisasi' => 3, 'siswa_id' => 8, 'kriteria_id' => 3],
            ['nilai_awal' => 92, 'inisialisasi' => 5, 'siswa_id' => 8, 'kriteria_id' => 4],
            // Siswa 9
            ['nilai_awal' => 5500000, 'inisialisasi' => 1, 'siswa_id' => 9, 'kriteria_id' => 1],
            ['nilai_awal' => 4, 'inisialisasi' => 4, 'siswa_id' => 9, 'kriteria_id' => 2],
            ['nilai_awal' => "mobil", 'inisialisasi' => 2, 'siswa_id' => 9, 'kriteria_id' => 3],
            ['nilai_awal' => 90, 'inisialisasi' => 5, 'siswa_id' => 9, 'kriteria_id' => 4],
            // Siswa 10
            // ['nilai_awal' => 3500000, 'inisialisasi' => 2, 'siswa_id' => 10, 'kriteria_id' => 1],
            // ['nilai_awal' => 1, 'inisialisasi' => 1, 'siswa_id' => 10, 'kriteria_id' => 2],
            // ['nilai_awal' => "motor", 'inisialisasi' => 3, 'siswa_id' => 10, 'kriteria_id' => 3],
            // ['nilai_awal' => 96, 'inisialisasi' => 5, 'siswa_id' => 10, 'kriteria_id' => 4],
        ];

        foreach ($penilaians as $key => $penilaian) {
            TopsisInisial::create($penilaian);
        }
    }
}
