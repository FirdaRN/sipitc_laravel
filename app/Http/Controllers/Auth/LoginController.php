<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
//    protected $redirectTo = '/';
    public function index(Request $request){
        $level = Auth::user()->level;
        switch ($level) {
            case '1':
                return $this->dashboardLevel1();
                break;
            
            default:
                return $this->dashboardLevel2();
                break;
        }        
    }

    protected function dashboardLevel1(){
        return view('admin.list');
    }

    protected function dashboardLevel2(){
        return view('peminjam.beranda');
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
