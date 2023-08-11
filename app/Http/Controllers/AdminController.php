<?php

namespace App\Http\Controllers;


class AdminController
{
    public function adminlogin()
    {
        return view('adminlogin');
    }

    public function admindologin()
    {
        $input = [
            'email' => request('email'),
            'password' => request('password'),
        ];

        if (auth()->guard('admin')->attempt($input,true)) {
            // Authentication successful
          return redirect()->route('wel');
        } else {
            // Authentication failed
            return redirect()->route('adminlogin')->with('message', 'invalid login');
        }
    } 
    public function logout(){
        auth()->logout();
    return redirect()->route('adminlogin');
    }

} 
