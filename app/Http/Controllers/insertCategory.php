<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class insertCategory extends Controller
{
    public function upload(Request $request){
      $data=array();
      $data['name']=$request->name;
      $data['slug']=$request->slug;

      $category=DB::table('categories')->insert($data);

    }
}
