<?php

namespace App\Http\Controllers;

use App\Models\Item_type;
use Illuminate\Http\Request;

class ItemTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $title = 'Tipe Barang';
         if($request -> get('status') == 'archived'){
            $itemTypes = Item_type::onlyTrashed()->paginate(3);
         }else{
            $itemTypes = Item_type::paginate(3);
         }
         return view('item_type.index', compact('itemTypes','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Barang";
        return view('item_type.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $items = Item_type::create([
            'name' => $request -> name,
            "description" => $request -> description
        ]);
        return redirect('/tipe');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item_type  $item_type
     * @return \Illuminate\Http\Response
     */
    public function show(Item_type $item_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item_type  $item_type
     * @return \Illuminate\Http\Response
     */
    public function edit($tipe)
    {
        $itemTypes = Item_type::findorfail($tipe);
        $title = "Edit Barang";
        return view('item_type.edit',compact('itemTypes','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item_type  $item_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$tipe)
    {
        $item = Item_type::findorfail($tipe);
        $item -> update([
            "name" => $request -> name ?? $item -> name,
            "description" => $request -> description ?? $item -> description
        ]);
        return redirect('/tipe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item_type  $item_type
     * @return \Illuminate\Http\Response
     */
    public function destroy($tipe)
    {
        Item_type::find($tipe)->delete();
        return redirect('/tipe');
    }

    public function restore($tipe){
        $item = Item_type::withTrashed();
        $item->find($tipe)->restore();
        return redirect('/tipe?status=archived');
    }

    
    public function restoreAll(){
        Item_type::onlyTrashed()->restore();
        return redirect('/tipe?status=archived');
    }

    public function forceDelete($tipe){
        $item = Item_type::withTrashed();
        $item -> find($tipe)->forceDelete();
        return redirect('/tipe?status=archived');
    }
}
