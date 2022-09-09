<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Item_type;
use App\Models\Pengiriman;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    //
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
        $title = "";

        return view('pengiriman.index', compact('items','title','columns'));
    }

    public function show(Item $Item)
    {
        //
    }
}
