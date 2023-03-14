<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable= [
        'nom',
        'prenom',
        'adresse',
        'email',
        'password',
        'admin'
    ];
    public function locations()
    {
        return $this->hasMany('App\Models\Location');
    }

}
