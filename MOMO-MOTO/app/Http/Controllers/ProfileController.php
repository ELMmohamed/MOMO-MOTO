<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index(): View
    {
        return view('layouts.profile');
    }

    public function update(Request $request){

        DB::table('users')->where('id', Auth::user()->id)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'address'=> $request->address,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

    }
   
}
