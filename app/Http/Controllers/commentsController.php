<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\comments;
use DateTime;
use App\Models\Comments;
use Auth;
use App\Models\Post;


class commentsController extends Controller
{
    //
   public function postcomment(Request $req){
   	$comment=$req->input('comment');
   	$post_id=$req->input('Postid');
   //return $req;
   //	dd($post_id);
   	$comTab = new Comments;
   	$now = new DateTime();
   	$comTab->userid=Auth::user()->id;
   	//dd(Auth::user()->id);
   	$comTab->postid=$post_id;

   	$comTab->comment=$comment;
   	$comTab->cdate=$now;
   	$comTab->save();

    $data = view('userview.comments')->with('req',$req)->render();
    //dd($data);
    return $data;
   	// return 
   //	dd($comment);
 //  	return redirect()->route('singleview',['id'=>$post_id]);
   }
   public function viewcont($id){
   	Post::where('id',$id)->increment('views',1);
   	return($id);
   }
   public function scrollview($id){
   			//dd($id);
		   	$data=Post::skip($id)->limit(4)->get();
		   	//dd($data);
		   	$val=view('userview.scrollpost')->with('req',$data)->render();
		   	//dd($val);
		   	return ($val);
   }
}
