<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;

class IndexController extends Controller
{
    //
    public function index( Request $request )
    {
        $model = new Course();
        dd($model::all());
    }
}
