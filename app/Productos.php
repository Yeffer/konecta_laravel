<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    //
    protected $fillable = [
        'nombre','referencia','precio','peso','categoria_id','stock'
    ];


    public function getRouteKeyName()
    {
        return 'url';
    }
    
}
