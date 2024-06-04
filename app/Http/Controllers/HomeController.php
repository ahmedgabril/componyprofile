<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function  upload(Request $request){

  if($request->hasFile('upload')){

    $orginName= $request->file('upload')->getClientOriginalName();
    $fileName =pathinfo($orginName, PATHINFO_FILENAME);
    $extention = $request->file('upload')->getClientOriginalExtension();

    $fileName = $fileName .'_'. time() .'.'. $extention;
    $request->file('upload')->move(public_path('media' ),$fileName);
    $url= asset('media/'. $fileName);
    return response()->json(['filename'=> $fileName,'uploaded'=>1 ,'url'=> $url]);

    }


  }

}
