<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class addCategoryController extends Controller
{
    public function addCategory(){
      $category=DB::table('categories')->get();
      return view('addCategoryWithImage',compact('category'));
    }

    public function addImage(Request $request){
      $data=array();
      $data['categoryId']=$request->catId;
      $data['title']=$request->title;
      $data['details']=$request->details;
      $image=$request->file('image');
      if($image){
        $image_name=str_random(5);
        $ext = strtolower($image->getClientOriginalExtension());
        $image_full_name=  $image_name.'.'.$ext;
        $upload_path='postimage/image/';
        $image_url = $upload_path.$image_full_name;
        $successimg = $image->move($upload_path,$image_full_name);
        $data['image']=$image_url;
        $success = DB::table('posts')->insert($data);
      }
      else{
        $success = DB::table('posts')->insert($data);
      }

    }
}
