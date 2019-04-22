<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Roles;
use App\Models\Permission;
use DB;
use Session;
use Illuminate\Support\Facades\Hash;

class Users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
      //protected $redirectTo = '';

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)

    {
      //  dd($Request->all());
         $data=  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'Role' =>$data['Role'],
            'password' => Hash::make($data['password'])]);
           $val=$data['Role'];
         // dd($val);
            $userId=$data->id;
           // dd($userId);
            $data = DB::table('role_user')->insert(['user_id' => $userId,'role_id'=>$val]);
           // $val=User::OrderBy('id','desc')->first();
        //dd($val->id);
           // $id=$val->id;
         //   DB::table('role_user')->insert(['user_id'=>$id,'role_id'=>$data['Role']]);
         // dd($data);
            Session::flash('message','User Added Successfully');
           return redirect()->route('Users');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function sendPasswordResetNotification($token)
{
    $this->notify(new ResetPasswordNotification($token));
}
}
