<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    //
    protected $fillable = [
        'id','productos_id','cantidad'
    ];


    public function getRouteKeyName()
    {
        return 'url';
    }
    
}
