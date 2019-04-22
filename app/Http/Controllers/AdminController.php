<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\User;
use App\Models\Post;
use App\Models\Roles;
use Session;

class AdminController extends Controller
{
    public function profile(){
    	return view('adminpanel.profile');
    }
    public function adminlogin(){
    	return view('adminpanel.adminlogin');
    }
    public function adminheader(){
    	return('predf');
    	$userid=Auth()::user()->name;
    	return($userid);
    	return view('adminpanel.include.header');
    }
    public function EditUser($id){
        $id = Auth::user()->id;
        $data['user']=User::where('id',$id)->first();
        $data['role']=DB::table('role_user')->where('user_id',$id)->join('roles','roles.id','=','role_user.role_id')->first();
        $data['roles']=Roles::pluck('name','id')->toArray();
        //dd($data['roles']);
       // dd($data['list']);
        return view('adminpanel.user.edit',$data);
    }
    public function userroleupdate(Request $req){

        $userid=$req->input('userid');
       // return($req);
        $rol_id=$req->input('Role');
    	DB::table('role_user')->where('user_id',$userid)->update(['role_id'=>$rol_id]);
    	return($req);

    }
    public function DeletePost($id){
        Post::where('id',$id)->delete();
        DB::table('cate_post')->where('post_id',$id)->delete();
        Session::flash('message','Post Has Been Deleted SuccessFully');
        return redirect()->route('postDetails');
    }
    public function userregistration(){
        return view('userview.userregistration');
    }
}
