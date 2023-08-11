<?php

namespace App\Http\Controllers;
use App\models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\PasswordResetMail;
use Illuminate\Support\Facades\Mail;
class LoginController
{
    public function login()
    {
        return view('login');
    }

    public function dologin()
    {
        $input = [
            'email' => request('email'),
            'password' => request('password'),
        ];

        if (auth()->attempt($input,true)) {
            // Authentication successful
          return redirect()->route('wel');
        } else {
            // Authentication failed
            return redirect()->route('login')->with('message', 'invalid login');
        }
    } 
    public function logout(){
        auth()->logout();
    return redirect()->route('login');
    }


   public function forgotpassword(){
    return view('forgotpassword');
   }

   public function doforgotpassword(){
   $user = User::where('email',request('email'))->first();
   if($user){
     $token = Str::random(120);
     $user->update(['password_reset_token'=>$token]);
     Mail::to(request('email'))->send(new PasswordResetMail($user,$token));
     return redirect()->back()->with('message', 'Please check your inbox for password reset'); 
    
      }
      else {
        return redirect()->back()->with('message', 'Invalid email adress'); 
      }
   
   }
   public function resetPassword($token){
    $user = User::where('password_reset_token',$token)->first();
    
    if($user){
        $user->update(['password_reset_token'=>'null']);
        return view('reset_password',compact('user'));
    }
    else{
        return redirect()->route('forgotpassword')->with('message', 'Invalid email adress');   
    }
   }

   public function doresetPassword(){
    $user = User::where('user_id',decrypt(request('user_id')))->first();
    
   if($user){
    $user->update([
        'password'=>bcrypt(request('password'))
    ]);
    return redirect()->route('login')->with('message', 'login with new password !!'); 
   }else{
    return  redirect()->route('login')->with('message', 'something went wrong!!'); 
   }
  
   }
}
