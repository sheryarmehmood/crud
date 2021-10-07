<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Posts extends Model
{

    protected $fillable = [
        'user_id', 'title', 'body',
    ];

    public function user(){
       return $this->belongsTo(User::class);
    }
}
