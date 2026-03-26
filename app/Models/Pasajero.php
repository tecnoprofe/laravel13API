<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 


class Pasajero extends Model
{
    use SoftDeletes; 
    protected $fillable = ['nombre_completo', 'vuelo_id'];

}
