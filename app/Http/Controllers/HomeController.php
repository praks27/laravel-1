<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        //cara mangggil halaman yang mau dtampilkan ('nama folder.namafile')
        return view('pages.home');
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
        return view('pages.services');
    }
    public function contact(){
        return view('pages.contact');
    }
}
