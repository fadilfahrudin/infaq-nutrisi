<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    protected $table = 'donations';
    // public function program(){
    //     return $this->belongsTo('App\Models\Program', 'program_id')->withDefault();
    // }
    // public function fundriser(){
    //     return $this->belongsTo('App\Mpdels\Mitra', 'refcode', 'refcode')->withDefault();
    // }
    public function reply() {
        return $this->hasOne('App\Models\DonasiReplies', 'donation_id')->withDefault();
    }
}
