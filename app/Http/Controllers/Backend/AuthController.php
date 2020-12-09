<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Observers\UserObserver;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginPage(){
        dd('stop in_progress');
    }
    public function registerPage(){
        return view('auth.register');
    }
    public function backUp(){
        User::observe(UserObserver::class);
    }
}
