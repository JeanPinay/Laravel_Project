<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlexController extends Controller
{
    public function show()
    {
        return view('flexForm');
    }

    public function store(Request $request)
    {
        
    }
}

