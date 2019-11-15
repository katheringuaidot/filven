<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //línea necesaria


class Sells extends Model
{

    use SoftDeletes; //Implementamos 

	protected $dates = ['deleted_at']; //Registramos la nueva columna
	
  
	protected $table = 'sells';

	protected $fillable = [
		'id','id_client', 'id_user' ,'sub_total', 'iva', 'total',
	];
}
