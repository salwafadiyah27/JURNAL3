<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        $mahasiswa = (object) [
            'nama' => 'Budi Santoso',
            'nim' => '123456789',
            'email' => 'budi@examaple.com',
            'jurusan' => 'S1 Sistem Informasi',
            'fakultas' => 'Fakultas Rekayasa Industri',
            'foto' => 'images/profil.jpg' // path relatif dari public/
        ];

        // - Kirim object tersebut ke view 'profil'
        return view('profil', compact('mahasiswa'));
    }
}
