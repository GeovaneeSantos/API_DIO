<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HelloWorldController extends Controller
{
    public static function hello($name, Request $request){
        return response()->json([
            "Oi" => "Hello {$name} ",
            "Tchau" => $request->foo
        ]);
    }
}
