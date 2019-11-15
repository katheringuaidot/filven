<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Cliente extends Model
{
    use SoftDeletes; //Implementamos

    protected $table = 'clientes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
       'id', 'name' ,'ci', 'adress', 'phone'
    ];

    protected $dates = ['deleted_at']; //Registramos la nueva columna
}
