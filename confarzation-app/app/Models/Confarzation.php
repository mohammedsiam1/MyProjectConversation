<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Confarzation extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $data=['Last_message_at'];


    public function getRouteKeyName()
    {
        return 'uuid';
    }
    public function users(){
        return $this-> belongsToMany(User::class);
    }

    public function messages(){
        return $this->hasMany(Message::class);
    }
}
