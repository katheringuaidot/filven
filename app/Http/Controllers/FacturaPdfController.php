<?php

namespace App\Http\Controllers;

use App\Sells;
use App\Books;
use App\Iva;
use App\User;
use App\Cliente;
use App\Sells_plus;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class FacturaPdfController extends Controller
{
    
  public function invoice() 
    {
        $data = $this->getData();
        $date = date('Y-m-d');
        $invoice = "2222";
        $view =  \View::make('pages.sells.invoice', compact('data', 'date', 'invoice'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('invoice');
    }
 
    public function getData() 
    {
        $data =  [
            'quantity'      => '1' ,
            'description'   => 'some ramdom text',
            'price'   => '500',
            'total'     => '500'
        ];
        return $data;
    }
}
