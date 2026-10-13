<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    public function profil()
    {
        $nama = "Aisha Danish Ara Rochmadi";
        $nim = "242520128";
        $prodi = "Teknologi Informasi";

        return view('mahasiswa.profil', compact(
            'nama',
            'nim',
            'prodi'
        ));
    }

    public function daftar()
    {
        $mahasiswa = [
            [
                'nama' => 'Varrenshin Bebbil Kometo',
                'nim' => '242520108',
                'ipk' => 3.80
            ],
            [
                'nama' => 'Isyana Mukti Timur',
                'nim' => '242520126',
                'ipk' => 3.40
            ],
            [
                'nama' => 'Ichi Marchalina Putri Raswa',
                'nim' => '242520119',
                'ipk' => 3.60
            ],
            [
                'nama' => 'Sally Femita Zahra Salsabilla',
                'nim' => '242520127',
                'ipk' => 2.90
            ],
            [
                'nama' => 'Farah Aulia Wijaya',
                'nim' => '242520122',
                'ipk' => 3.10
            ],
        ];

        return view('mahasiswa.index', compact('mahasiswa'));
    }
}