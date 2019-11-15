<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //línea necesaria


class Enterprise extends Model
{
    use SoftDeletes; //Implementamos 

    protected $table = 'enterprise';

    protected $fillable = [
    	'name', 'adress', 'phone', 'rif'
    ];

    protected $dates = ['deleted_at']; //Registramos la nueva columna
    
}
