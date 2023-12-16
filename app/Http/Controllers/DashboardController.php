<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        return view('dashboard');
    }

    public function showSignIn()
    {
        return view('sign-in');
    }

    public function showSignUp()
    {
        return view('sign-up');
        
    }
    public function pendaftar()
    {
        return view('pendaftar');
        
    }
    public function showPendaftar()
    {
        return view('pendaftar');
        
    }
    public function detailRegistrasi()
    {
        return view('detail-registrasi');
        
    }
    public function sidebarUser()
    {
        return view('sidebar-user');
        
    }
    public function homepageUser()
    {
        return view('homepageuser');
        
    }

    public function daftarMahasiswa()
    {
        return view('daftar-mahasiswa');
        
    }
    

   
    
    public function cssPendaftaran()
    {
        return view('css-pendaftaran');
        
    }
}




