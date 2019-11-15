<?php
namespace App\Http\Controllers;

use DB;
use App\Sells;
use App\Books;
use App\Sells_plus;
use App\Enterprise;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        return view('pages.report.index');
    }
    public function consult1(Request $request)
    {
        $sells = Sells_plus::select(
/*             'sells_pluses.id',
            'sells_pluses.id_sell',
 */            'books.name',
/*             'sells_pluses.created_at AS date',
 */            'sells_pluses.precies',
            DB::raw("sum(sells_pluses.quantity) as count")
            )
        ->join('books','books.id','sells_pluses.id_books')
        ->join('sells','sells.id','sells_pluses.id_sell')
/*         ->groupBy('sells_pluses.id')
        ->groupBy('sells_pluses.id_sell')
 */        ->groupBy('books.name')
/*         ->groupBy('sells_pluses.created_at')
 */        ->groupBy('sells_pluses.precies')
        ->whereBetween('sells.created_at', [$request->date_start, $request->date_end])
        ->orderBy('count','DESC')
        ->get();

        $empresa = Enterprise::all();
        //return view('pages.report.consult1', compact('sells'));
            $pdf = PDF::loadView('pages.report.reportpdf', compact('sells','empresa'));
            //return $pdf->stream('reporte');
        return view('pages.report.consult1', compact('sells'));
   }
   public function reportpdf()
    {

        $sells = Sells_plus::select(
            /*             'sells_pluses.id',
                        'sells_pluses.id_sell',
             */            'books.name',
            /*             'sells_pluses.created_at AS date',
             */            'sells_pluses.precies',
                        DB::raw("sum(sells_pluses.quantity) as count")
                        )
                    ->join('books','books.id','sells_pluses.id_books')
                    ->join('sells','sells.id','sells_pluses.id_sell')
            /*         ->groupBy('sells_pluses.id')
                    ->groupBy('sells_pluses.id_sell')
             */        ->groupBy('books.name')
            /*         ->groupBy('sells_pluses.created_at')
             */        ->groupBy('sells_pluses.precies')
                    ->whereBetween('sells.created_at', [$request->date_start, $request->date_end])
                    ->orderBy('count','DESC')
                    ->get();

                    $empresa = Enterprise::all();
                    //return view('pages.report.consult1', compact('sells'));
                        $pdf = PDF::loadView('pages.report.reportpdf', compact('sells','empresa'));
                        return $pdf->stream('reporte');
    }
}
