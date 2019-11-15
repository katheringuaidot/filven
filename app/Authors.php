<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes; //línea necesaria
use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    use SoftDeletes; //Implementamos 

    protected $table = 'authors';

    protected $fillable = [
        'name',
    ];

    protected $dates = ['deleted_at']; //Registramos la nueva columna

}
