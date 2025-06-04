<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $siswa = $user->siswa; // pastikan relasi 'siswa' ada di model User

        return view('dashboard', compact('user', 'siswa'));
    }

}
