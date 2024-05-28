<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\admin;
use App\Models\User;


class AdminController extends Controller
{
    public function blog(Request $request)
    {
        $png = admin::all();
        $user = $request->user;
        $id_user = $user->id_user;

        $admin = admin::create([
            "id_user" => $request-> $id_user,
            "penulis" => $request->penulis,
            "artikel" => $request->artikel
        ]);

        return redirect('/cari')->with('succes','data berhasil di tambah');
    }

    public function home()
    {
        $admin = admin::all();
        return view("home",compact("admin"));
    }

    public function mine(Request $request)
    {
        $user = $request->user;
        $id_user = $user->id;

        $admin = admin::where("id_user","=",$id_user)->get();
        return view('/home',compact("admin"));

    }


    public function delete($id)
    {
        admin::destroy($id);
        return redirect('/home');
    }

    public function edit(Request $request, $id)
    {
        $admin = admin::find($id);
        // $admin->update($request->except(["_token"]));
        $admin->update([
            "penulis" => $request -> penulis,
            "artikel" => $request -> artikel
        ]);
        return redirect('/home');

    }

//     public function login(Request $request)
//     {
//         $data = $request->validate([
//             "email"=>"required|email:dsn",
//             "password"=>"required"
//         ]);
//         if(Auth::attempt($data)){
//             $request->session()->regenerate();
//             return redirect()->intended('/index');
//         }

//         return back()->with('ok','login gagal');
//     }

//     public function daftar(Request $request)
//     {
//     $data = $request->validate([
//     "username"=>"required|max:225",
//     "email"=>"required|email:dns|unique:user",
//     "password"=>"required|min:5}max:255"
// ]);

//        $data["password"]=bcrypt($data["password"]);

//        User::create($data);
//        return redirect('/')->with("ok","Berhasil daftar");
//     }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');

    }



}
