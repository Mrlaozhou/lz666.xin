<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Tests\RequestTest;

class IndexController extends Controller
{
    //
    public function index( Request $request )
    {
        return response()->json(['status'  =>  'true']);
    }
}
