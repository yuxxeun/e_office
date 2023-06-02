<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;

class DashboardController extends Controller
{
    public function daftar_user()
    {
        $users = Mahasiswa::get();
        return view('dashboard', compact('users'));
    }
}
