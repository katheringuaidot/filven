<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes; //línea necesaria
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{

    use SoftDeletes; //Implementamos 

    protected $table = 'books';

    protected $fillable = [
        'cod' ,'name', 'year', 'quantity', 'precie','id_author','id_edition' 
    ];

    protected $dates = ['deleted_at']; //Registramos la nueva columna

}
