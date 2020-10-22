<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public function bus()
    {
        return $this->belongsTo('App\Models\Bus');
    }

    public function user()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
