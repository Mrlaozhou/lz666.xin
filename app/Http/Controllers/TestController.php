<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index( Request $request )
    {
        dd(server('HTTP_REFERER'));
//        dd($request->server->getHeaders());
        return view('test');
    }
}
