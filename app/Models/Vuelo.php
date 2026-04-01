<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Aerolinea;


class Vuelo extends Model
{
        protected $fillable = ['aerolinea_id', 'destino'];  


        public function aerolinea()
        {
            return $this->belongsTo(Aerolinea::class);
        }        
}
