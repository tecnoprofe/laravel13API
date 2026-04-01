<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 
use App\Models\Vuelo;


class Aerolinea extends Model
{
    use SoftDeletes; 
    protected $fillable = ['nombre'];
    

    public function vuelos()
    {
        return $this->hasMany(Vuelo::class);
    }

}
