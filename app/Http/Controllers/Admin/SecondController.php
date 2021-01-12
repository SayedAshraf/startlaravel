<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SecondController extends Controller
{
    public function __construct()
    {
        //this middleware in construct hattnfez 3ala kol el controller , except hatmn3 function mo3yna
        $this->middleware('auth')->except('ShowString');
    }

    public function ShowString()
    {
        return "Show String from Second Controller ";
    }
    public function ShowString1()
    {
        return "Show String one from Second Controller ";
    }
    public function ShowString2()
    {
        return "Show String two from Second Controller ";
    }
}
