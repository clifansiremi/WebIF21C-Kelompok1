<?php

namespace App\Controllers;

class Web extends BaseController
{
    public function index()
    {
        return view('web/home');
    }
    public function dokumentasi()
    {
        return view('web/aset/dokumentasi');
    }
    public function inventaris()
    {
        return view('web/aset/inventaris');
    }
    public function masuk()
    {
        return view('web/rekapitulasi/masuk');
    }
    public function keluar()
    {
        return view('web/rekapitulasi/keluar');
    }
    public function dipinjamkan()
    {
        return view('web/rekapitulasi/dipinjamkan');
    }
    public function dikembalikan()
    {
        return view('web/rekapitulasi/dikembalikan');
    }
    public function lokasi()
    {
        return view('web/pelacakan/lokasi');
    }
    public function status()
    {
        return view('web/pelacakan/status');
    }
    public function roi()
    {
        return view('web/roi');
    }
    public function logout()
    {
        return view('web/login/login');
    }
    public function register()
    {
        return view('web/login/register');
    }
}
