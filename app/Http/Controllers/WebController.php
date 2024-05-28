<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class WebController extends Controller
{
    public function index()
    {
        $admin = admin::all();
        return view('home',compact("admin"));
    }

    public function edit($id)
    {
        $admin = admin::find($id);
        return view("edit",compact("admin"));
    }


    public function register (Request $request){

        $data = $request->validate([
        'name'=>'required|max:255',
        'email'=>'required|email:dns|unique:users',
        'password'=>'required|min:5|max:255'
            ]);

            $data['password']=bcrypt($data['password']);

            User::create($data);
            return redirect('/login');
        }

        public function login(Request $request)
        {
            $data = $request->validate([
                'email' => 'required|email:dns',
                'password' => 'required'
            ]);

            if(Auth::attempt($data)){
                $request->session()->regenerate();
                return redirect()->intended('/home');
            }

            return back();
        }
}
