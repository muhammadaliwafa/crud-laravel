<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    //
    public function index($id){
        $items = JawabanModel::get_all();
        // dd($items);
        
        foreach($items as $i =>$v){
            // echo '<pre>';
            // print_r($v); 
            // echo '</pre>';
            // echo $v->pertanyaan_id;
            if(($v->pertanyaan_id) != $id){
                unset($items[$i]);
            }
        }
        // dd($items);
        return view('jawaban.index', compact('items'));
    }
}
