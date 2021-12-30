<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $guarded=[];
public function isOwn(){
    return $this->user_id === auth()->id();      // back true or false
}

    public function confarzation(){
        return $this->belongsTo(Confarzation::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
