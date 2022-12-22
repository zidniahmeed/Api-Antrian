<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $tipe = Product::orderBy('id', 'DESC')->get();
        $result = $tipe;
        return response()->json($result);
    }
    public function store(Request $r) {
        $result = [];
        $result['status'] = false;
        $result['message'] = "something error"; 

        $data = new Product();
        $data->name = $r->name;
        $data->harga = $r->harga;
        $data->save();

        $result = $data;
   

        return response()->json($result);
    }
}
