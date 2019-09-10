<?php

namespace App\Http\Controllers;

use App\Sell;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SellsController extends Controller
{
    public function index()
    {
        $sells = Sell::all();
        return view('market.index', ['sells' => $sells]);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'contact' => 'required|string',
            'location' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }
        $user=User::find(1);
        $path = Storage::putFile('public',$request->file('image'));
        $url=Storage::url($path);
        $sell = Sell::create([
            'image'=>$url,
            'user_id'=>$user = Auth::user()->id,
            'seller'=>$user = Auth::user()->name,
            'title'=>$request->title,
            'contact'=>$request->contact,
            'location'=>$request->location,
        ]);
//        dd($sell);
        $sell->save();
        return redirect()->route('sells_path');
    }
}
