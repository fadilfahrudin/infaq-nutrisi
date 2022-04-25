<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
public function newsDetail(){
    return $this->hasMany('App\Models\NewsDetail', 'id');
}
}
