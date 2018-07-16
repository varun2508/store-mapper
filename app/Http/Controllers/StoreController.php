<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Http\Request;
use Illuminate\Html\HtmlServiceProvider;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::all();
        
        return view('store.index')->with([
            'stores' => $stores
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('store.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Store::create($request->all());
        
        return redirect('stores');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $store = Store::find($id);

        return view('store.edit')->with([
            'store' => $store
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function update(Request $request)
    {
        Store::find($request->id)->update($request->all());

        return redirect('stores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function destroy(Request $request)
    {
        Store::find($request->id)->delete();
        
        return redirect('stores');
    }
}
