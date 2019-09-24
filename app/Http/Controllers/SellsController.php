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
    /**
     * Display seller posted produce seen only by the seller.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     */
    public function index()
    {
        $sells = Sell::all();
        return view('market.index', ['sells' => $sells]);
    }

    /**
     * Display posted produce, seen by buyer and seller.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index_product()
    {
        $sells = Sell::all();

        return view('market.products', ['sells' => $sells]);
    }

    /**
     * Display specific produce clicked on by the buyer
     *
     * @param $id
     * @param $blog_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $sell = Sell::find($id);

        return view('market.show', ['sell' => $sell,]);
    }

    /**
     * Display form to edit the produce by the seller.
     *
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $sell = Sell::find($id);

        return view('market.edit', ['sell'=>$sell]);
    }

    /**
     * Update produce.
     *
     * @param Request $request
     *
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,$id)
    {
        $sell= Sell::find($id);
        $sell->title=$request->title;
        $sell->location=$request->location;
        $sell->update();
        return redirect()->route('sells_path',['sell'=>$sell]);
    }

    /**
     * Store/create produce.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'location' => 'required|string',
            'name' => 'required|string',
            'contact' => ['string','min:10'],
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
            'name'=>$request->name,
            'location'=>$request->location,
        ]);
        $sell->save();
        return redirect()->route('sells_path');
    }

    /**
     * Delete/destroy produce.
     *
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $sell = Sell::find($id);
        $sell->delete();

        return redirect()->route('sells_path');
    }

}
