<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='posts';

    public function category()
    {
        //return $this->belongsTo(\App\Category::class, 'category_id', 'id');
        return $this->belongsTo(\App\Category::class);
    }

    public function user()
    {
        //return $this->belongsTo(\App\User::class, 'user_id', 'id');
        return $this->belongsTo(\App\User::class);
    }

    public function tag()
    {
        //return $this->belongsTo(\App\User::class, 'user_id', 'id');
        return $this->belongsToMany(\App\Tag::class);
        
        // return $this->belongsToMany(\App\Tag::class)->latest('created_at')->paginate(5);
    }
}
