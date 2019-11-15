<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sells_plus extends Model
{
    
	protected $table = 'sells_pluses';

	protected $fillable = [
		'id_sell', 'id_books', 'quantity', 'precies'
	];
}
