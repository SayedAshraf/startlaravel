<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
    public function ShowAdminName()
    {
        return "Sayed Ashraf";
    }

    public function getIndex()
    {
        // $data=[];
        // $data['id']=5;
        // $data['name']='sayed';

        // $obj = new \stdClass();
        // $obj->foo = 'bar';
        // $obj->id = 20;
        // $obj->name='Ashroof';

        $data = ['Sayed', 'Ahmed' , 'MOhamed'];
        // $data = [];

        return view('welcome', compact('data'));
    }
}
