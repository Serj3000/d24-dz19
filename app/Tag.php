<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table='tags';

    public function post()
    {
        //return $this->belongsTo(\App\User::class, 'user_id', 'id');

        return $this->belongsToMany(\App\Post::class);
        // return $this->belongsToMany(\App\Post::class)->latest();
    }
}
