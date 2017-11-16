<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index( Request $request )
    {
//        abort('404','Bad');
//        dd(app('Auth')::user()->name);
        return view('test');
    }
}
