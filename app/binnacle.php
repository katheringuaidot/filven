<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class binnacle extends Model
{
    protected $table = 'binnacles';

    protected $fillable = [
        'id_user', 'action', 'url'
    ];
}
