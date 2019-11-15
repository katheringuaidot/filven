<?php

namespace App\Http\Controllers;

use App\binnacle;
use Illuminate\Http\Request;

class BinnacleController extends Controller
{
    static function AddBinnacle($action,$url)
    {
        $binnacle = new binnacle;
        $binnacle->id_user = Auth()->User()->id;
        $binnacle->action = $action;
        $binnacle->url = $url;
        $binnacle->save();
    }
}
