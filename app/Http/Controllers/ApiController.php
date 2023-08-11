<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;


class ApiController
{
    function loginprofile()
    {
        $user = User::where('email', request('email'))->first();
 
        if (!$user) {
            return response()->json([
                'email' => request('email'),
                'password' => request('password'),
                'message' => 'User not found. Login failed.',
                'status' => 404
            ]);
        }

        if (Hash::check(request('password'), $user->password)) {
            $token = $user->createToken('mobile-app')->plainTextToken;
            return response()->json([
                'email' => request('email'),
                'password' => request('password'),
                'token' => $token,
                'message' => 'Credentials are valid. Login success.',
                'status' => 200
            ]);
        } else {
            return response()->json([
                'email' => request('email'),
                'password' => request('password'),
                'message' => 'Credentials are invalid. Login failed.',
                'status' => 250
            ]);
        }
    }

      function getprofile()
      {
        $userId = request('user_id');
         $user = User::find($userId);
         return response()->json([
            'status' =>200,
            'data' =>[
                  'profile' =>$user,
                  'orders' =>$user->orders,
                  'address' =>$user->address
                      ],
           'message' => 'user deleted successfully'
           ]);
                         
       }            
    }

    