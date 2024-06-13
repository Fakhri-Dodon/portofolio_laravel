<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        return view('portofolio.home');
    }

    public function about() {
        return view('portofolio.about');
    }

    public function portofolio() {
        return view('portofolio.portofolio');
    }

    public function contact() {
        return view('portofolio.contact');
    }
}
