<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsDetail extends Model
{
    protected $tabel = 'news_details';
    public function news() {
        return $this->belongsTo('App\Models\News', 'news_id');
    }
}

