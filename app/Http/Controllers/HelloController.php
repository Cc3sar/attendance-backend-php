<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class HelloController extends Controller
{
    public function hello()
    {
        $test = Test::all();
        return response()->json($test);
    }
}
    