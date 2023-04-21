<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function show()
    {
        $cats = Cat::all();
        return view('cats', ['cats' => $cats]);
    }
}
