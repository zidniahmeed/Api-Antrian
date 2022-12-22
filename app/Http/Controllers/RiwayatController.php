<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Riwayat;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function store(Request $r)
    {
        $cart = Cart::all();
 
       
        $total = $cart->sum('total');
        $barang = [];
        foreach ( $cart as $key ) {
            $barang[] =  $key->name;


        }
        $barang =  implode("|",$barang);
        $data = new Riwayat;
        $data->name = $barang ;
        $data->total = $total;
        $data->save();

        Cart::truncate();
        
        $result = $data;
        return response()->json($result);
    }
    public function index(){
        $tipe = Riwayat::orderBy('id', 'DESC')->get();
        $result = $tipe;
        return response()->json($result);
    }
}
