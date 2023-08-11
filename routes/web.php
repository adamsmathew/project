<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\EmailControllers;


Route::get('/', [LoginController::class,'login'])->name('login');
Route::post('dologin', [LoginController::class,'dologin'])->name('dologin');



Route::get('forgotpassword', [LoginController::class,'forgotpassword'])->name('forgotpassword');
Route::post('doforgotpassword', [LoginController::class,'doforgotpassword'])->name('doforgotpassword');
Route::get('resetpassword/{token}', [LoginController::class,'resetpassword'])->name('resetpassword');
Route::post('doresetpassword', [LoginController::class,'doresetpassword'])->name('doresetpassword');

Route::get('admin/login', [AdminController::class,'adminlogin'])->name('adminlogin');
Route::post('admin/dologin', [AdminController::class,'admindologin'])->name('admindologin');



Route::get('admin', [FrondEndController::class,'admin'])->name('admin');   //broadcasting

Route::group(['middleware'=>'user_auth'],function(){

  Route::get('home', [FrondEndController::class,'home'])->name('home');
  Route::get('login',[FrondEndController::class,'homepage'])->name('wel');
  Route::get('create',[FrondEndController::class,'createpage'])->name('crt');
  Route::get('view/{userId}',[FrondEndController::class,'view'])->name('view');
  Route::get('pdf',[FrondEndController::class,'pdf'])->name('pdf');
  Route::get('contact-us',[FrondEndController::class,'contactpage'])->name('cnt');
  Route::post('save-user',[FrondEndController::class,'saveuserpage'])->name('save');
  Route::get('about-us',[FrondEndController::class,'aboutpage'])->name('abt');
  Route::get('edit/{userId}',[FrondEndController::class,'edituserpage'])->name('edt');
  Route::post('update', [FrondEndController::class, 'updateuser'])->name('update');
  Route::get('delete/{userId}', [FrondEndController::class,'delete'])->name('delete');
  Route::get('forcedelete/{userId}', [FrondEndController::class,'forceDelete'])->name('fdt');
  Route::get('logout', [LoginController::class,'logout'])->name('logout');
  Route::get('sendmail',[EmailController::class,'index']);

});