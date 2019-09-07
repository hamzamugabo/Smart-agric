<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellsController extends Controller
{
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'contact' => 'required|string',
            'location' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }
        $path = Storage::putFile('public',$request->file('image'));
        $url=Storage::url($path);
        $blog = Blog::create(['image'=>$url,
            'title'=>$request->title,
            'contact'=>$request->contact,
            'location'=>$request->location,
        ]);
        $blog->save();
//        return response([],'201');

//        response($blog,'201');

        return redirect()->route('blogs_path','','302');
    }
}
