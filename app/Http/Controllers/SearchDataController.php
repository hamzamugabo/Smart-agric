<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    public function result(Request  $request)
    {
        $result=\App\Sell::where('name', 'LIKE', "%{$request->input('query')}%")->get();
        return response()->json($result);
    }
}
