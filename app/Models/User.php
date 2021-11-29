<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'package_id',
        'name',
        'email',
        'job',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function company(){
        return $this->hasOne(Company::class);
    }

    public function package(){
        return $this->hasOne(Package::class);
    }

    public function ads(){
        return $this->hasMany( 'App\Models\Ad');
    }

    public function sent_messages(){
        return $this->hasMany( 'App\Models\Message', 'sender_user_id');
    }

    public function received_messages(){
        return $this->hasMany( 'App\Models\Message', 'receiver_user_id');
    }

    public function all_messages(){

        $all_messages = Message::where('sender_user_id',$this->id)->orWhere('receiver_user_id',$this->id)->get();
        return $all_messages;

        return $this->hasMany( 'App\Models\Message', 'receiver_user_id');
    }

}
