<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    public function clientes() 
    {
        return $this->hasMany(Cliente::class);
    }
}
