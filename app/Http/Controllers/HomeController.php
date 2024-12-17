<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function lapor()
    {
        return view('lapor');
    }
    public function cara()
    {
        return view('cara');
    }
    public function profildinas()
    {
        return view('profildinas');
    }
    public function faq()
    {
        return view('faq');
    }
    public function bantuan()
    {
        return view('bantuan');
    }
    public function kontak()
    {
        return view('kontak');
    }
}
