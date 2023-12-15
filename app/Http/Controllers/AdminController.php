<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        $check = Admin::select(['username'])->where('username', $request->username)->first();

        if($check) {
            if(!Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
                return redirect()->back()->with('danger', 'Username atau password salah');
            }
    
            if(Auth::check()) {
                return redirect()->route('jadwal.index');
            }else{
                return redirect()->back()->with('danger', 'Username atau password salah');
            }
        }

        return redirect()->back()->with('danger', 'Username atau password salah');
    }

    public function logout() 
    {
        if(Auth::check()) Auth::logout();

        return redirect('/');
    }
}
