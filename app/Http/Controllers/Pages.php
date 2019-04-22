<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Post;
use App\Models\User;
use DB;
use App\Models\Roles;
use DateTime;
use Auth;
use Session;
use App\Models\Post;


class Pages extends Controller
{
    ///$id = Auth::user()->id;
    public function Dashboard(){
        $data['list']=Post::get();
        $data['usernum']=user::get();

         $id = Auth::user()->id;
        //return($id);
        $data['role']=DB::table('role_user')->where('user_id',$id)->join('roles','roles.id','=','role_user.role_id')->first();
    	
        return view('adminpanel.DashBoard',$data);
    }
    public function UploadPost(Request $req){
    	$title=$req->input('title');
    	$details=$req->input('details');
    	$file=$req->file('imgFile');
    	$cat=$req->input('categary');
        $user=Auth::user()->name;

        $now = new DateTime();
        //$email = Auth::user()->email;
        //dd($cat);
        $t="chrck";
    	$destnation="Post";
        //movie file to destination
        $file->move($destnation,$file->getClientOriginalName());
        $fname=$file->getClientOriginalName();
    	Post::insert(['title'=>$title,'details'=> $details,'Categary'=>$t,'ImageFile'=>$fname,'User'=>$user,'post_date'=>$now,'views'=>0]);

        $Post=Post::OrderBy('id','desc')->first();
    	
        foreach ($cat as $value) {
            DB::table('cate_post')->insert(['post_id'=>$Post->id,'cate_id'=>$value]);
            # code...
        }
        Session::flash('message','Post Has heen Successfully Uploaded');
        return redirect()->route('postDetails');
    }
    public function Users(){
        $data['list']=User::get();
         $id = Auth::user()->id;
        //return($id);
        $data['role']=DB::table('role_user')->where('user_id',$id)->join('roles','roles.id','=','role_user.role_id')->first();

        return view('adminpanel.user.list',$data);
    }
    public function ViewPost($id){

        // $data['list']=Post::where('post.id',$id)
        // ->join('cate_post','cate_post.post_id','=','post.id')
        // ->join('categary','categary.id','=','cate_post.cate_id')
        // ->select('post.*','categary.title as Cate')->get();

        $data['list']=Post::where('id',$id)->first();
        $data['cat']=DB::table('cate_post')->where('post_id',$id)->join('categary','categary.id','=','cate_post.cate_id')->get();
       // dd($data);
        //dd($data['list']);
        $idd = Auth::user()->id;
        $data['role']=DB::table('role_user')->where('user_id',$idd)->join('roles','roles.id','=','role_user.role_id')->first();
        return view('adminpanel.post.ViewPost',$data);
    }
    public function updatePost($id){
         $data['cate_list']=DB::table('categary')->pluck('id','title')->toArray();
         $data['catpost']=DB::table('cate_post')->where('post_id',$id)->pluck('cate_id')->toArray();
         //dd()
        //dd($data['catpost']);
        $data['list']=Post::where('post.id',$id)->first();
       //  ->join('cate_post','cate_post.post_id','=','post.id')
       //  ->join('categary','categary.id','=','cate_post.cate_id')
       //  ->select('post.*','categary.title as Cate')->get();
        //dd($data['list']);
        $idd = Auth::user()->id;
        $data['role']=DB::table('role_user')->where('user_id',$idd)->join('roles','roles.id','=','role_user.role_id')->first();
       return view('adminpanel.post.updatePost',$data);

    }
    public function UpdatePostData(Request $req){
                 //   dd($req->all());
        
            $title=$req->input('title');
            $details=$req->input('details');
            $cat=$req->input('categary');
            //dd($cat);
            $img=$req->file('imgFile');
            $now = new DateTime();
            $id=$req->input('PostId');
            DB::table('cate_post')->where('post_id',$id)->delete();
            
             $res=Post::find($id);
            
             $res->title=$title;
             $res->post_date=$now;
             $res->details=$details;
             $res->Categary="test";
            
            if($req->hasFile('imgFile'))
            {
               
       
                  
                
                    $destnation="Post";
                    //movie file to destination
                    $img->move($destnation,$img->getClientOriginalName());
                    $fname=$img->getClientOriginalName();
                    
                    $res->ImageFile=$fname;
                    
                   
              
                   
            }
            $res->save();
           
           foreach ($cat as $value) {

                DB::table('cate_post')->insert(['cate_id'=>$value,'post_id'=>$id]);

               # code...
           }
            Session::flash('message','Post Has heen Successfully Updated');
           return redirect()->route('postDetails');
        
    }
    public function postDetails(){
        $data['list']=Post::get();
        $id = Auth::user()->id;
        $data['role']=DB::table('role_user')->where('user_id',$id)->join('roles','roles.id','=','role_user.role_id')->first();
        return view('adminpanel.post.postDetails',$data);
    }
    public function addpage(){
        $id = Auth::user()->id;
        $data['role']=DB::table('role_user')->where('user_id',$id)->join('roles','roles.id','=','role_user.role_id')->first();
        $data['list']=Roles::select('name','id')->get();
       // dd($data['list']);
        return view('adminpanel.user.add',$data);
    }
    public function addpostpage(){
        $id = Auth::user()->id;
        $data['role']=DB::table('role_user')->where('user_id',$id)->join('roles','roles.id','=','role_user.role_id')->first();
       //  DB::table('categary')->insert(['title'=>$cat]);
        $data['cat']=DB::table('categary')->get();
        return view('adminpanel.post.add',$data);
    }
    public function categatypage(){
        $id = Auth::user()->id;
        $data['role']=DB::table('role_user')->where('user_id',$id)->join('roles','roles.id','=','role_user.role_id')->first();
        $data['cat']=DB::table('categary')->get();
        return view('adminpanel.post.categary',$data);
    }
    public function Uploadcategary(Request $req){
        $cat=$req->input('title');
        $id = Auth::user()->id;
        DB::table('categary')->insert(['title'=>$cat]);
        
        $data['cat']=DB::table('categary')->get();
        
        $data['role']=DB::table('role_user')->where('user_id',$id)->join('roles','roles.id','=','role_user.role_id')->first();
        return view("adminpanel.post.categary",$data);


    }
    public function check(){
        return view('experment');
    }
  
}
