<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use RuntimeException;
use App\Http\Controllers\Controller;
use App\Models\Course;

class CourseController extends Controller
{
    //
    public function index( Request $request )
    {
        if( $request->ajax() )
        {
            $model = new Course;
            $data = $model::all(['id','title']);
//            dd($data->toArray());
            return response()->json($data->toArray());
        }
        else
        {
            var_dump(app('Response'));
            throw new RuntimeException('Bad request.');
        }

    }
}

