<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function latestNews()
    {
        return view('pages.latestnews');
    }

    public function pyo()
    {
        return view('pages.pyo');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
