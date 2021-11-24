<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_user_id',
        'receiver_user_id',
        'title',
        'file',
        'text_content',
        'seen',
    ];

    public function sender_user(){
        return $this->belongsTo( 'App\Models\User' , 'sender_user_id');
    }

    public function receiver_user(){
        return $this->belongsTo( 'App\Models\User' , 'receiver_user_id');
    }

}
