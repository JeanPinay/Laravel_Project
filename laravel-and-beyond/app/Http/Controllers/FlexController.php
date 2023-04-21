<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

    class FlexController extends Controller
    {
        public function show()
        {
            return view('flex.flex');
        }
    
        public function store(Request $request)
        {
            $request->validate([
                'name' => 'required|min:3',
                'zodiac' => 'required',
                'comment' => 'required|min:10',
                'file' => 'required|mimes:jpeg,bmp,png'
            ]);

            $data= $request->all();
        
            $file = $request->file('file');
            $file_path = null;
            if ($file) {
                $imageName= time() . "." . $file->getClientOriginalName();
                $file->move(public_path('images'), $imageName);
                $data['file']="$imageName";
                // $file_path = $file->store('asset', 'public');
            }
        
            $cat = new Cat();
            $cat->name = $request->input('name');
            $cat->zodiac = $request->input('zodiac');
            $cat->comment = $request->input('comment');
            $cat->file = $data['file'];
            $cat->save();

            // return redirect()->route('flex-submitted')->with(['name' => $cat->name, 'zodiac' => $cat->zodiac, 'comment' => $cat->comment]);

            // // return redirect()->route('flex-submitted');
            return view('flex.flexSubmitted', ['name' => $cat->name, 'zodiac' => $cat->zodiac, 'comment' => $cat->comment]);
        }
        
    }

