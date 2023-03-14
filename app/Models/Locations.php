<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    use HasFactory;

    public function voiture()
    {
        return $this->belongsTo('App\Models\Voiture');
    }
    

    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }

}
