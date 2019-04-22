<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Comments;
//use App\Models\Post;
use App\Models\Post;
use App\Models\Roles;
use App\Models\User;
use Mail;
use Session;
use Auth;
use App\Models\subscribe;
use Illuminate\Support\Facades\Hash;
class UserContoller extends Controller
{
    //
    public function Home(){
    	$data['catlist']=DB::table('categary')->get();
    	$data['postdetails']=Post::limit(5)->get();
    	$data['toppost']=Post::orderBy('views','desc')->limit(10)->get();
    	//dd($data['postdetails']);
    	return view('userview.home',$data);
    }
    public function SinglePostView($id){

    	// $data['postdetails']=Post::where('post.id',$id)
    	// ->join('cate_post','cate_post.post_id','=','post.id')
    	// ->join('categary','categary.id','=','cate_post.cate_id')
    	// ->select('post.*','categary.title as CatTitle')->get();
    	$data['postdetails']=Post::where('id',$id)->first();
    	$data['cat']=DB::table('cate_post')->where('post_id',$id)->join('categary','categary.id','=','cate_post.cate_id')->get();
    	//dd($data['cat']);

    	//dd($data['postdetails']);
    	$data['comm']=Comments::where('comments.postid',$id)
    	->join('users','users.id','=','comments.userid')
    	->select('comments.comment','comments.cdate','users.name')->get();
    //	dd($data['comm']);
    	$data['toppost']=Post::orderBy('views','desc')->limit(10)->get();
    	//dd($data['toppost']);
    	return view('userview.singleview',$data);
    }
    public function Search(Request $req){
    	$key=$req->input('Search');
    	//return $key;
    	$data['Topcate']=DB::table('categary')->get();
    	$data['catlist']=DB::table('categary')->where('title', 'like' ,'%'.$key.'%')->get();
    	$data['post_cat']=DB::table('cate_post')->get();
    	$data['toppost']=Post::orderBy('views','desc')->limit(10)->get();
    	//dd($data['post_cat']);

    	//dd($data['catlist']);
    	$data['postdetails']=Post::limit(5)->where('title', 'like' ,'%'.$key.'%')->orWhere('details', 'like' ,'%'.$key.'%')->get();
    	//dd($data['postdetails']);
    	return view('userview.searchresult',$data);

    }
    public function contact(){
	    	$data['catlist']=DB::table('categary')->get();
	    	$data['postdetails']=Post::limit(5)->get();
	    	$data['toppost']=Post::orderBy('views','desc')->limit(10)->get();
    		return view('userview.contact',$data);
    }
    public function sendmail(Request $req){
    	$name=$req->input('Name');
    	$email=$req->input('Email');
    	$msg=$req->input('Msg');

    	$data = array('name'=>"Prakash Choudhary");
 
 		$data = array('name'=>"Virat Gandhi");
      	$val=Mail::send('userview.include.send', $data, function($message) {
         $message->to('pkchoudhary1211@gmail.com', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment')->from('bsourav54@gmail.com');
        }
    );
      Session::flash('message', 'Your Message Has Been Sent Sucessfully');
      //return$val;

    	// Mail::send(['text'=>'msdfail'], $data, function($message) {
     //     $message->to('pkchoudhary1211@gmail.com', 'Laravel Mail')->subject
     //        ('Laravel Basic Testing Mail');
     //     $message->from('bsourav54@gmail.com','Perfect Mail');
     //  });
     // echo "Basic Email Sent. Check your inbox.";
    	//return($req);
      return redirect()->route('contact');
    }
    public function userlogin(){
    	
    	return view('userview.userlogin');
    }
    public function resetlink(){
    	
    	return view('userview.resetlink');

    }
    public function resetpassword(){
    	
    	return view('userview.passwordreset');
    }
    public function notvalid(){
		//return("invsddalid");

    	return view('userview.tryagin1');
    	//return("perfec t");
    	//$data['catlist']=DB::table('categary')->get();
    	//$data['postdetails']=Post::limit(5)->get();
    	return view('userview.dfds');
    	//return view('userview.invsddalid',$data);
    }
    public function adminheader(){
    	//return('predf');
    	$id = Auth::user()->id;
    	//return($id);
    	$data=DB::table('role_user')->where('user_id',$id)->join('roles','roles.id','=','role_user.role_id')->first();
    	//dd($data);
    
    //	$userid=Auth()::user()->name;
    	//return($userid);
    	return view('adminpanel.include.Header',$data);
    	//return("dsv.,zsncoz");
    }
    public function CreateAccount(Request $req){
        $name=$req->input('name');
        $email=$req->input('email');
        $password=$req->input('password');
      //  dd());
        $user= new User;
        $user->name=$name;
        $user->email=$email;

        $user->password=Hash::make($password);
        $user->Role=30;
        $user->save();
        $data=User::orderBy('id','desc')->first();

        DB::table('role_user')->insert(['user_id'=>$data->id,'role_id'=>30]);
        return redirect()->route('userlogin');
    }
    public function subscribe(Request $req){
        $name=$req->input('name');
        $email=$req->input('Email');
        $data=subscribe::where('s_email',$email)->get();
        if(count($data)>0)
        {
            Session::flash('message', 'You Are Already Subscribed!'); 
              return redirect()->route('usershome');
        }
        else
        {
            // subscribe::insert(['s_name'=>$name,'s_email' =>$email]);
            $sub= new subscribe;
            $sub->s_name=$name;
            $sub->s_email=$email;
            $sub->save();
            Session::flash('message', 'Thank You For Subscribe'); 
        }
        return redirect()->route('usershome');
        //return "done Sucessfully";
    }

}
