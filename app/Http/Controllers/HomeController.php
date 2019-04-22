<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this;
      //  $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->hasRole('Admin1')){

            return redirect()->route('Dashboard');
        }else{
            return redirect()->route('usershome');

        }
        
    }
    public function logout () {
    //logout user
    auth()->logout();
    // redirect to homepage
    return redirect('usershome');
}
}
