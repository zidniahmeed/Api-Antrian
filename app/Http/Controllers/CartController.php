<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $tipe = Cart::orderBy('id', 'DESC')->get();
        $result = $tipe;
        return response()->json($result);
    }
    public function store(Request $r) {
        $result = [];
        $result['status'] = false;
        $result['message'] = "something error"; 

        $qty = $r->qty;
        $harga = $r->harga;
        
        $total = $qty * $harga;

        $data = new Cart();
        $data->name = $r->name;
        $data->qty =$qty;
        $data->harga = $harga;
        $data->total = $total;

        $data->save();

        $result = $data;
   

        return response()->json($result);
    }
}
