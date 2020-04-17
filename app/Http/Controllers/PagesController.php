<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class PagesController extends Controller
{
    public function Index()
    {
        return view('index');
    }
    public function features()
    {
        return view('features');
    }
    public function price()
    {
        $nama_halaman = '404 NOT FOUND';
        
        return view('test', ['nama_halaman' => $nama_halaman]);
    }
}