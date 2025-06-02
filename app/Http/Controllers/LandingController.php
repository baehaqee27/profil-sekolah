<?php
// app/Http/Controllers/LandingController.php
namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Guru;

class LandingController extends Controller
{
    public function beranda()
    {
        $jumlahSiswa = \App\Models\Siswa::count();
        $jumlahGuru = \App\Models\Guru::count();
        return view('landing.beranda', compact('jumlahSiswa', 'jumlahGuru'));
    }
}
