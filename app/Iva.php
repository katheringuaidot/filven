<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes; //línea necesaria
use Illuminate\Database\Eloquent\Model;

class Iva extends Model
{
    use SoftDeletes; //Implementamos 

    protected $table = 'iva';

    protected $fillable = [
        'name',
    ];

    protected $dates = ['deleted_at']; //Registramos la nueva columna
}
