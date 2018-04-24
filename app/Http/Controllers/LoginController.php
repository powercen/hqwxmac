<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function loginView()
    {
        return view('admin.loginform');
    }

    public function Login(UserRequest $request)
    {
        if(Auth::attempt(['name'=>$request->name, 'password'=>$request->password])){
            return redirect()->route('w');
        }

        return redirect()->route('login');
    }

}
