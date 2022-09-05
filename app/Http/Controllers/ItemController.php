<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Item_type;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request -> get('status') == 'archived'){
            $items = Item::onlyTrashed()->paginate(5);
        }else{
            // $items = Item::paginate(10);
            $items = Item::with("itemTypes")->paginate(5);
        }
        
    

        // $items = Item::with('itemTypes')->paginate(2);
        // innerjoin
        // $items = \DB::table('item')
        //             ->join('item_types','item.item_type_id', '=' , 'item_types.id')
        //             ->select('item.*', 'item_types.name as tipe')
        //             ->paginate(10);

        // $items = \DB::table('item')
        //             ->join('item_types','item.item_type_id', '=' , 'item_types.id')
        //             ->select(\DB::raw('item.id,item.kode_barang, item.nama_barang, item.stock, item.harga, item_types.name as jenis, (item.stock * item.harga) as total_aset'))
        //             ->orderBy('total_aset','desc')
        //             ->paginate(10);
        
        
        $columns = ['Kode Film', 'Nama Film','Tipe', 'Stock', 'Harga','Total Aset'];
        $title = "Film";

        return view('item.index', compact('items','title','columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Film";
        $items = Item_type::get();
        return view('item.create',compact('title','items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $items = Item::create([
            'item_type_id' => $request -> item_type,
            "kode_film" => $request -> kode,
            "nama_film" => $request -> nama,
            "stock" => $request -> stock,
            "harga" => $request -> harga
        ]);
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $Item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $Item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $Item
     * @return \Illuminate\Http\Response
     */
    public function edit($home)
    {
        $item = Item::findorfail($home);
        $itemTypes = Item_type::get();
        $title = "Edit Film";
        return view('item.edit',compact('item','title','itemTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $Item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $home)
    {
        $item = Item::findorfail($home);
        $item -> update([
            "item_type_id" => $request -> item_type ?? $item -> item_type,
            "kode_film" => $request -> kode ?? $item -> kode,
            "nama_film" => $request -> nama ?? $item -> nama,
            "stock" => $request -> stock ?? $item -> stock,
            "harga" => $request -> harga ?? $item -> harga
        ]);
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $Item
     * @return \Illuminate\Http\Response
     */
    public function destroy($home)
    {
        Item::find($home)->delete();
        return redirect('/home');
    }


    public function restore($home){
        $item = Item::withTrashed();
        $item->find($home)->restore();
        return redirect('/home?status=archived');
    }

    
    public function restoreAll(){
        Item::onlyTrashed()->restore();
        return redirect('/home?status=archived');
    }

    public function forceDelete($home){
        $item = Item::withTrashed();
        $item -> find($home)->forceDelete();
        return redirect('/home?status=archived');
    }
}
