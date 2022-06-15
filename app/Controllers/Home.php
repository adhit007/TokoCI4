<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }
    public function about()
    {
        return view('pages/about');
    }
    public function shop()
    {
        return view('pages/shop');
    }
    public function contact()
    {
        return view('pages/contact');
    }
}
