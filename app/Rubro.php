<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
    public function comercios()
    {
        return $this->belongsToMany(Comercio::class);
    }
}
