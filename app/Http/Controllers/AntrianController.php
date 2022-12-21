<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;

class AntrianController extends Controller
{
    public function AntrianActive(){

        $tipe = Antrian::where('status','active')->orderBy('id', 'DESC')->get();

        $result = $tipe;
  

        return response()->json($result);
    }

    public function AntrianNonActive(){

        $tipe = Antrian::where('status','nonactive')->orderBy('id', 'DESC')->get();

        $result = $tipe;
      
        return response()->json($result);
    }

    public function AddAntrian(Request $r) {
        $result = [];
        $result['status'] = false;
        $result['message'] = "something error"; 

        $data = new Antrian;
        $data->type = $r->type;
        $data->nomor = $r->nomor;
        $data->status = 'active';
        $data->save();

        $result['data'] = $data;
        $result['status'] = true;
        $result['message'] = 'success';

        return response()->json($result);
    }

    public function UpdateAntrian(Request $r){
        $result = [];
        $result['status'] = false;
        $result['message'] = "something error"; 

        $data = Antrian::where('nomor', $r->nomor)->first();

        $data->status = 'nonactive';
        $data->save();

        $result['data'] = $data;
        $result['status'] = true;
        $result['message'] = 'success';

        return response()->json($result);
    }


}
