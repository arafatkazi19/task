<?php

namespace App\Http\Controllers;

use App\Upload;
use Illuminate\Http\Request;

class TaskFrontEndController extends Controller
{
    //
    public function index(){
        $file=Upload::where('type','video')->get();
        $file_img=Upload::where('type','post')->get();
        return view('front-end.home.home',['file'=>$file,'file_img'=>$file_img]);
    }


    public function watchDetails($id){
        $data = Upload::find($id);
     return view('front-end.home.details',['data'=>$data]);
    }

    public function postDetails($id){
        $data = Upload::find($id);
        return view('front-end.home.post_details',['data'=>$data]);
    }



}
