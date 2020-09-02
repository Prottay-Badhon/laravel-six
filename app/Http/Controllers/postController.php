<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class postController extends Controller
{
    public function showHome(){
      return view('home');
    }

    public function showContact(){
      return view('contact');
    }

    public function showPost(){
      $post =DB::table('posts')
      ->join('categories','posts.categoryId','categories.id')
      ->select('posts.*','categories.name','categories.slug')
      ->paginate(3);
      return view('service',compact('post'));
    }

    public function showBlog(){
      return view('blog');
    }

   public function viewAllpost(){
     $post =DB::table('posts')->get();
     return view('allpost',compact('post'));
   }

   public function editMethod($id){
     //$post = DB::table('posts')
     //->join('categories','posts.categoryId','categories.id')
     //->select('posts.*','categories.name','categories.slug')
    // ->get()->where('id',$id);
     //return view('editPost',compact('post'));
     $category = DB::table('categories')->get();
     $post = DB::table('posts')->where('id',$id)->first();
     return view('editPost',compact('post','category'));
   }
   public function showMethod($id){

    $post =DB::table('posts')
    ->join('categories','posts.categoryId','categories.id')
    ->select('posts.*','categories.name','categories.slug')
    ->get()->where('id',$id);
    return view('showAllpost',compact('post'));
    //return response()->json($post);
   }

   public function deleteMethod($id){
     $post = DB::table('posts')->where('id',$id)->first();
     $image = $post->image;
        $delete = DB::table('posts')->where('id',$id)->delete();
        if($delete){
          unlink($image);
          return redirect()->back();

        }

   }

   public function updateMethod(Request $request,$id){
     $data = array();
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
       $success = DB::table('posts')->where('id',$id)->update($data);
     }
     else
     $data['image']=$request->oldimage;
     $success = DB::table('posts')->where('id',$id)->update($data);
     return redirect()->route('allpost');


   }
}
