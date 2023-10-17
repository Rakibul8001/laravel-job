<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function upload(){
        return view('upload');
    }

    public function fileupload(){
        if(request()->has('mycsv')){
            $data = array_map('str_getcsv',file(request()->mycsv));
            $header = $data[0];
            return $header;
        }
    }
}
