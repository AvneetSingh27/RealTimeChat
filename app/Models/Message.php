<?php

namespace App\Models;

use App\Models\User;
use App\Models\UserMessage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    public function user_messages(){
        return $this->hasMany(UserMessage::class);
    }
    public function users(){
        return $this->belongsToMany(User::class,'user_messages','message_id','sender_id')->withTimestamps();
    }
}
