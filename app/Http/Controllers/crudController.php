<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class crudController extends Controller
{
    public function insertData(Request $request){
        //print_r($_POST);

        $data = $request->except('_token');
        print_r($data);
        $tbl = decrypt($data['tbl']);
        unset($data['tbl']);
        $data['created_at'] = date('Y-m-d H:i:s');
        DB::table($tbl)->insert($data);
        $request->session()->flash('message', 'Data inserted successfully.');
        return redirect()->back();
        //print_r($data);
    }
    public function updateData(Request $request){
        $data = $request->except('_token');
        $tbl = decrypt($data['tbl']);
        unset($data['tbl']);
        $data['updated_at'] = date('Y-m-d H:i:s');
        DB::table($tbl)->where(key($data),reset($data))->update($data);
        $request->session()->flash('message','Data update successfully.');
        return redirect()->back();
    }
}
