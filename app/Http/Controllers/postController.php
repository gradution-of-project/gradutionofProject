<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;

class postController extends Controller
{
    //


      public function __construct()
      {
          $this->middleware('auth');
      }

  public function savepost(Request $request){

        $post =new post();
        $post->body=$request->input('postbody');

        if($request->hasFile('image')){
            $files=$request->file('image');
            foreach ($files as $file){
                 $filename=$file->getClientOriginalName();
            }
        }
        return view('ask');
    }

   public  function showallpost(){

          $allpost=post::all();
          return $allpost;
   }
}
