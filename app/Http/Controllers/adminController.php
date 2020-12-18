<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function index(){
        return view('backend.index');
    }

    
    public function viewCategory(){
        $data = DB::table('categories')->get();
        //print_r($data);
        return view('backend.categories.category', ['data'=> $data]);
    }
    public function updateCategory($id){
        $singledata = DB::table('categories')->where('id',$id)->first();
        if($singledata == NULL) {
            return redirect('category');
        }
        $data = DB::table('categories')->get();
        return view ('backend.categories.edit_category',['data'=>$data,'singledata'=>$singledata]);
    }
    public function multipleDelete(Request $request){
        $data = $request->except('_token');
        //print_r($data);
        if($data['bulk-action'] == 0){
            $request->session()->flash('message','Please select the action you want to perform');
            return redirect()->back();
        }
        $tbl = decrypt($data['tbl']);
        $tblid = decrypt($data['tblid']);
        if(empty($data['select-data'])){
            $request->session()->flash('message','Please select the data you want to delete');
            return redirect()->back();
        }
        $ids=$data['select-data'];
        //print_r($ids);
        foreach($ids as $id){
            DB::table($tbl)->where($tblid, $id)->delete();
        }
        $request->session()->flash('message','Deleted successfully!!');
            return redirect()->back();

    }
    public function settings(){
        $data = DB::table('settings')->get();
        //print_r($data);
        return view('backend.settings', ['data' => $data] );
    }
}
