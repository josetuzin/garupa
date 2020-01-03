<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function comercios()
    {
        return $this->hasMany(Comercio::class);
    }
}
