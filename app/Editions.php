<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes; //línea necesaria
use Illuminate\Database\Eloquent\Model;

class Editions extends Model
{
    use SoftDeletes; //Implementamos 

    protected $table = 'editions';

    protected $fillable = [
        'name', 'year', 'id_author'
    ];

    protected $dates = ['deleted_at']; //Registramos la nueva columna

}
