<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles;
use DB;
use Auth;
use Session;
use App\Models\Permission;

class rules extends Controller
{
    public function rules(){
         $id = Auth::user()->id;
        //return($id);
        $data['role']=DB::table('role_user')->where('user_id',$id)->join('roles','roles.id','=','role_user.role_id')->first();
    	$data['check']=Permission::get();
    	
    	return view('adminpanel.Rules.rules',$data);
    }
    public function permission(){
         $id = Auth::user()->id;
        //return($id);
        $data['role']=DB::table('role_user')->where('user_id',$id)->join('roles','roles.id','=','role_user.role_id')->first();
    	return view('adminpanel.Rules.premission',$data);
    }
    public function presubmit(Request $req){
    	$name=$req->input('name');
    	$disp=$req->input('displayname');
    	$desc=$req->input('details');



    	$data['list']=Permission::insert(['name'=>$name,'display_name'=>$disp,'description'=>$desc]);
         Session::flash('message','Permission Has been Successfully Uploaded');
    	return redirect()->route('preslist');
    	

    }
    public function rulessubmit(Request $req){
    	$per=$req->input('permissions');
    	//dd($val);

    	$name=$req->input('name');
    	$disp=$req->input('displayname');
    	$desc=$req->input('details');


    	$data['list']=Roles::insert(['name'=>$name,'display_name'=>$disp,'description'=>$desc]);
    	$val=Roles::OrderBy('id','desc')->first();
    	//dd($val->id);
    	$id=$val->id;
    	
    	foreach ($per as $data) {

    	DB::table('permission_role')->insert(['permission_id'=>$data,'role_id'=>$id]);
    		//$i++;
    		//dd($data);
    	}

    	//dd($data['list']);
        Session::flash('message','Role Has been Successfully Uploaded');
    	return redirect()->route('ruleslist');

    }
    public function ruleslist(){
    	$data['list']=Roles::get();
         $id = Auth::user()->id;
        //return($id);
        $data['role']=DB::table('role_user')->where('user_id',$id)->join('roles','roles.id','=','role_user.role_id')->first();
    	return view('adminpanel.Rules.rulelist',$data);
    }
     public function preslist(){
         $id = Auth::user()->id;
        //return($id);
        $data['role']=DB::table('role_user')->where('user_id',$id)->join('roles','roles.id','=','role_user.role_id')->first();
    	$data['list']=Permission::get();
    	return view('adminpanel.Rules.prelist',$data);
    }
    public function editrole($id){
    	//return($id);
    	//DB::enableQueryLog();

    	// $data['list']=Roles::where('roles.id',$id)
    	//  ->leftJoin('permission_role','permission_role.role_id','=','roles.id')
    	//  ->join('permissions','permissions.id','=','permission_role.permission_id')
    	 
    	
    	
    	//  ->select('permissions.name','permission_role.permission_id','roles.name as role_name','roles.display_name','roles.description','roles.id')
    	// ->get(); 
    //dd(DB::getQueryLog());
    	//dd($data['list']);
    	$data['per']=Permission::get()->pluck('name','id');
    	$data['roles']=Roles::where('id',$id)->first();
       // dd($data);

    	$data['list']=DB::table('permission_role')->select('permission_id')->where('role_id',$id)->pluck('permission_id')->toArray();
    	$id = Auth::user()->id;
        //return($id);
        $data['role']=DB::table('role_user')->where('user_id',$id)->join('roles','roles.id','=','role_user.role_id')->first();	
             // dd($data);
		//dd($data['list']);
    	//dd($data['check']);
    	return view('adminpanel.Rules.updaterole',$data);
    }
    public function roleupdate(Request $req){
    	//dd($req);
    	$name=$req->input('name');
    	$displayname=$req->input('displayname');
    	//dd($displayname);
    	$desc=$req->input('details');
    	$per=$req->input('permission');
    	$roleid=$req->input('roleid');
    	//dd($per);

		$roletable = Roles::find($roleid);


		$roletable->name=$name;
		$roletable->display_name=$displayname;
		$roletable->description=$desc;
		$roletable->save();
		//

    	DB::table('permission_role')->where('role_id',$roleid)->delete();
    	foreach ($per as $data) {
    		DB::table('permission_role')->insert(['permission_id'=>$data,'role_id'=>$roleid]);
    		//$i++;
    		//dd($data);
    	}
          Session::flash('message','Role Has been Successfully Updated');
		return redirect()->route('ruleslist');


    }

}
