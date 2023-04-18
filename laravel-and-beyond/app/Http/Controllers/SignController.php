<?php

namespace App\Http\Controllers;

use App\Models\Sign;
use Illuminate\Http\Request;

class SignController extends Controller
{
    public function show(){
        $signs = Sign::all();
        return view('signs', ['signs' => $signs]);
    }

    public function showDetail( Sign $sign) // this is the article from my route
    {
        // dd($sign);
    return view('sign', ['sign' => $sign] );
    }
}