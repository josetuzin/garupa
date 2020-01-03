<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comercio extends Model
{
    public function ubicaciones()
    {
        return $this->hasMany(Ubicacion::class);
    }

    public function rubros()
    {
        return $this->belongsToMany(Rubro::class);
    }
}
