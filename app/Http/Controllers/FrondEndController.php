<?php

namespace App\Http\Controllers;
use App\models\User;
use Illuminate\Support\Facades\Mail;
use App\Events\NewUserCreatedEvent;
use App\Mail\UserCreatedMail;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;



class FrondEndController extends Controller
{
     function homepage()
     {
      $users = User::paginate(5);

         return view ('welcome',compact('users'));
     }
     function aboutpage()
     {
        return view ('about_us');
     }
     function contactpage()
     {
        return view ('contact_us');
     }
          
     function edituserpage($userId)
     {
          $user = User::find($userId);
          
         return view ('edit',compact('user'));
     }


     function view($userId)
     {
          $user = User::find(decrypt($userId));

         return view ('view',compact('user'));
     }



     function updateuser(){
          $userId=decrypt(request('user_id'));
          $user=User::find($userId);
          $user->update([
            'name'=>request('name'),
            'email'=>request('email'),
            'date_of_birth'=>request('date_of_birth'),
            'status'=>request('status'),
             ]);
            return redirect()->route('wel')->with('message','updated succesfully') ;
            }

     function createpage()
     {
        return view ('create');
     }  
     function home()
     {
        return view ('home');
     }  
     function saveuserpage()
     {
       $name = request('name');
       $email = request('email');
       $dob = request('date_of_birth');
       $status= request('status');
       request()->validate(['name'=>'required|min:5','email'=>'required']);
       $user=User::create([
        'name'=> $name,
        'email'=>$email,
        'date_of_birth'=>$dob,
        'status'=>$status,
         ]);
         NewUserCreatedEvent::dispatch($user);
         //return "event fired......";
    

      //   if(request()->hasFile('image')){ 
           // $extension = request('image')->extension();
          //  $fileName = 'user_pic_'.time().'.'.$extension;
          //  request()->file('image')->storeAs('images', $fileName);
         //   $input ['image'] = $fileName;
        // }
        // $user=User::create($input);
         
     //    Mail::to($user->email)
      // ->cc('admin@gmail.com')->send(new UserCreatedMail($user));
       return redirect()->route('wel');
     }
   function delete($userId){
      // return $userId;
      $user = User::find(decrypt($userId));
      $user->delete();
      return redirect()->route('wel')->with('message', 'Deleted successfully');
      }

  function pdf(){
    $users = User::all();
     $pdf = PDF::loadView('invoice', ['users' => $users]);
     return $pdf->download('invoice.pdf');
  }


  function forceDelete($userId){
   // return $userId;
   $user = User::find(decrypt($userId));
   $user->forcedelete();
   return redirect()->route('wel')->with('message', ' force Deleted successfully');
   }

  
    function admin(){
      return view('admin'); 
       }
   
}  