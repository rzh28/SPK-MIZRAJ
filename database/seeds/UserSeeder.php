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
                'nama' => 'Januar Rizky',
                'jenis_kelamin' => '1',
                'tempat_lahir' => 'Depok',
                'tanggal_lahir' => '2008-10-29',
                'alamat' => 'Jalan Pondok Benda',
                'agama' => '1',
                'kelas' => '2',
                'no_tlp_siswa' => '08xx-xxxx-xxx',
                'nama_ayah' => 'Zakaria',
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
                'nama' => 'Dama Yusuf',
                'jenis_kelamin' => '1',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '2009-10-11',
                'alamat' => 'Jalan Villa Jatiras',
                'agama' => '1',
                'kelas' => '2',
                'no_tlp_siswa' => '08xx-xxxx-xxx',
                'nama_ayah' => 'Abdullah',
                'pekerjaan_ayah' => 'Lainnya',
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
                'nama' => 'M Sakti',
                'jenis_kelamin' => '1',
                'tempat_lahir' => 'Bekasi',
                'tanggal_lahir' => '2008-02-29',
                'alamat' => 'Jalan Villa Nusa Indah',
                'agama' => '1',
                'kelas' => '2',
                'no_tlp_siswa' => '08xx-xxxx-xxx',
                'nama_ayah' => 'Beni',
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
                'nama' => 'K. Dzakwan',
                'jenis_kelamin' => '1',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '2008-06-27',
                'alamat' => 'Jalan Kemerdekaan',
                'agama' => '1',
                'kelas' => '2',
                'no_tlp_siswa' => '08xx-xxxx-xxx',
                'nama_ayah' => 'Wahyudi',
                'pekerjaan_ayah' => 'Lainnya',
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
                'nama' => 'Niltal Amal',
                'jenis_kelamin' => '1',
                'tempat_lahir' => 'Bekasi',
                'tanggal_lahir' => '2008-08-09',
                'alamat' => 'Jalan Kemerdekaan',
                'agama' => '1',
                'kelas' => '2',
                'no_tlp_siswa' => '08xx-xxxx-xxx',
                'nama_ayah' => 'Budi',
                'pekerjaan_ayah' => 'Lainnya',
                'nama_ibu' => 'Fatimah',
                'pekerjaan_ibu' => 'Ibu Rumah Tangga',
                'no_tlp_ortu' => '08xx-xxxx-xxx',
                'nama_wali' => 'Dina',
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
             // karyawan 1
            ['nilai_awal' => 2500000, 'inisialisasi' => 3, 'siswa_id' => 1, 'kriteria_id' => 1],
            ['nilai_awal' => 6, 'inisialisasi' => 5, 'siswa_id' => 1, 'kriteria_id' => 2],
            ['nilai_awal' => "motor", 'inisialisasi' => 3, 'siswa_id' => 1, 'kriteria_id' => 3],
            ['nilai_awal' => 96, 'inisialisasi' => 5, 'siswa_id' => 1, 'kriteria_id' => 4],
            // karyawan 2
            ['nilai_awal' => 800000, 'inisialisasi' => 5, 'siswa_id' => 2, 'kriteria_id' => 1],
            ['nilai_awal' => 3, 'inisialisasi' => 3, 'siswa_id' => 2, 'kriteria_id' => 2],
            ['nilai_awal' => "tidak ada", 'inisialisasi' => 5, 'siswa_id' => 2, 'kriteria_id' => 3],
            ['nilai_awal' => 95, 'inisialisasi' => 5, 'siswa_id' => 2, 'kriteria_id' => 4],
            // karyawan 3
            ['nilai_awal' => 1300000, 'inisialisasi' => 4, 'siswa_id' => 3, 'kriteria_id' => 1],
            ['nilai_awal' => 2, 'inisialisasi' => 2, 'siswa_id' => 3, 'kriteria_id' => 2],
            ['nilai_awal' => "motor", 'inisialisasi' => 3, 'siswa_id' => 3, 'kriteria_id' => 3],
            ['nilai_awal' => 80, 'inisialisasi' => 4, 'siswa_id' => 3, 'kriteria_id' => 4],
            // karyawan 4
            ['nilai_awal' => 5000000, 'inisialisasi' => 1, 'siswa_id' => 4, 'kriteria_id' => 1],
            ['nilai_awal' => 1, 'inisialisasi' => 1, 'siswa_id' => 4, 'kriteria_id' => 2],
            ['nilai_awal' => "mobil", 'inisialisasi' => 1, 'siswa_id' => 4,'kriteria_id' => 3],
            ['nilai_awal' => 85, 'inisialisasi' => 5, 'siswa_id' => 4, 'kriteria_id' => 4],
            // karyawan 5
            ['nilai_awal' => 1000000, 'inisialisasi' => 4, 'siswa_id' => 5, 'kriteria_id' => 1],
            ['nilai_awal' => 2, 'inisialisasi' => 2, 'siswa_id' => 5, 'kriteria_id' => 2],
            ['nilai_awal' => "motor", 'inisialisasi' => 3, 'siswa_id' => 5, 'kriteria_id' => 3],
            ['nilai_awal' => 90, 'inisialisasi' => 5, 'siswa_id' => 5, 'kriteria_id' => 4],
        ];

        foreach ($penilaians as $key => $penilaian) {
            TopsisInisial::create($penilaian);
        }
    }
}
