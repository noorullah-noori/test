<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Request;
use Auth;
use DB;
use Session;
use Hash;
use App\User;
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
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login() {
        $email = $_POST['email'];
        $password =$_POST['password'];
        $rec = DB::table('users')->where('email',$email)->first();

        $password_db = $rec->password;
        
        if(Hash::check($password,$password_db)) {
            // Authentication passed...
            $username = $rec->name;
            Session::put('username',$username);
            Session::put('email',$email);
            return redirect()->route('admin');
        }
        else {
            return Redirect()->route('login');
        }
        // if (Auth::attempt(['email' => $email, 'password' => $password])) {
        //     // Authentication passed...
        //     return redirect()->route('admin');
        // }
        // else {
        //     echo "failed";
        // }

    }
    public function logout() {
        session()->flush();
        return redirect()->route('login');      

    }
    public function users() {
        $users = User::all();
        return view('admin.users')->with('users',$users);      

    }
        public function edit_user($id) {
            print_r($id);exit;
        $users = User::all();
        return view('admin.users')->with('users',$users);      

    }
}
