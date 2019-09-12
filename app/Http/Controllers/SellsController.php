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

    public function index_product()
    {
        $sells = Sell::all();

        return view('market.products', ['sells' => $sells]);
    }

    /**
     * @param $id
     * @param $blog_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $sell = Sell::find($id);

        return view('market.show', ['sell' => $sell,]);
    }

    public function edit($id)
    {
        $sell = Sell::find($id);

        return view('market.edit', ['sell'=>$sell]);
    }

    public function update(Request $request,$id)
    {
        $sell= Sell::find($id);
        $sell->title=$request->title;
        $sell->location=$request->location;
        $sell->update();
        return redirect()->route('blogs_path',['sell'=>$sell]);

    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'location' => 'required|string',
            'contact' => ['numeric','digits_between:10,13'],
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
            'contact'=>$user = Auth::user()->contact,
            'title'=>$request->title,
            'location'=>$request->location,
        ]);
        $sell->save();
        return redirect()->route('sells_path');
    }

    public function delete($id)
    {
        $sell = Sell::find($id);
        $sell->delete();

        return redirect()->route('sells_path');
    }
}
