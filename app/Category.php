<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function threads()
    {
        return $this->hasMany('App\Thread');
    }
}
