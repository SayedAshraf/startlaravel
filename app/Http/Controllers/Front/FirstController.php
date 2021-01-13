<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstCOntroller extends Controller
{
    public function HomePage()
    {
        return view('landing');
    }
    public function AboutUS()
    {
        return view('about');
    }
}
