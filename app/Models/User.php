<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $primaryKey ='user_id';
    
    protected $fillable = [
        'name',
        'email',
        'date_of_birth',
        'status',
        'image',
        'password_reset_token',
        'password',
    ];

    

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
       'user_id',
         'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function address(){
        return $this->hasone(UserAddress::class,'user_id','user_id');
    }
    public function orders(){
        return $this->hasMany(Order::class,'user_id','user_id');
    }
}
