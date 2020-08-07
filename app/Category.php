<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';
    // protected $dateFormat = 'U';
    // protected $casts = [
    // 'created_at' => 'datetime:Y-m-d',
    // ];

    public function post()
    {
        return $this->hasMany(\App\Post::class, 'category_id', 'id');
        // return $this->hasMany(\App\Post::class);
    }
}
