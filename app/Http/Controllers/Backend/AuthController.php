<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Observers\UserObserver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    /**
     * Custom Login Page
     * Created By john deo
     * 10/12/2020 - Time 9:00 AM
     **/
    public function loginPage(){
        return view('auth.login');
    }

    /**
     * Custom Register Page
     * Created By john deo
     * 10/12/2020 - Time 10:00 AM
     **/
    public function registerPage(){
        return view('auth.register');
    }

    /**
     * Custom BackUp
     * Created By john deo
     * 09/12/2020 - Time 11:00 AM
     **/
    public function backUp(){
        User::observe(UserObserver::class);
    }

    /**
     * Custom Login Post
     * Created By john deo
     * 10/12/2020 - Time 11:00 AM
     **/
    public function loginPost(Request $request){
        $check = User::where('email','=',$request->email)->exists();
        if($check) {
            $user = User::where('email','=',$request->email)->first();
            if(Hash::check($request->password,$user->password)) {
                //match
                if(Auth::attempt(['email' => $request->email,'password' => $request->password])) {
                    //auth attempt success
                    return redirect()->route('dashboard');
                } else {
                    //auth attempt fail
                    return redirect()->back()->with('error_message','Some Thing Went Wrong');
                }
            } else {
                return redirect()->back()->with('error_message','Password Incorrect...!');
            }
        } else {
            return redirect()->back()->with('error_message','Email Not Exist In Our Record');
        }
    }

    /**
     * Custom Logout
     * Created By john deo
     * 10/12/2020 - Time 11:20 AM
    **/
    public function logOut(){
        Auth::logout();
        Session::flush();
        return redirect('/login-page');
    }


    /**
     * Custom Reset Password
     * Created By john deo
     * 10/12/2020 - Time 11:20 AM
     **/
    public function resetPassword(){
        return view('auth.passwords.reset');
    }

}
