<?php

namespace App\Http\Controllers;

use App\Sells;
use App\Books;
use App\Iva;
use App\User;
use App\Cliente;
use App\Sells_plus;
use App\Enterprise;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Http\Requests\SellsRequest;

class SellsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::join('sells','sells.id_user','=','users.id')
                    ->get();
        //$user = User::all();
        $sells = Sells::all();
        $books = Books::pluck('name','id');
        $iva = Iva::pluck('name','id');
        return view('pages.sells.index',compact('sells','books','iva','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sells = Sells::all();
        $books = Books::pluck('name','id');
        $iva = Iva::pluck('name','name');
        return view('pages.sells.create', compact('sells','books','iva'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SellsRequest $request)
    {
        // dd($request);
        //Consulta el cliente si existe en base de datos
        $cliente = Cliente::where('ci', $request->ci)->first();
        $id_cliente = null;

        if(isset($cliente->name)){
            //Valida si ya existe un cliente y retorna su id
            $id_cliente = $cliente->id;
        }else{
            //Crea un nuevo cliente
            $newClient = new Cliente;
            $newClient->ci = $request->ci;
            $newClient->name = $request->name;
            $newClient->adress = $request->adress;
            $newClient->phone = $request->phone;
            $newClient->save();
            $id_cliente = $newClient->id;
        }

        //Guardar las Ventas
        $sell = new Sells;
        $sell->id_client = $id_cliente;
        $sell->id_user = Auth()->user()->id;
        $sell->sub_total = $request->totalIva;
        $sell->iva = $request->iva;
        $sell->total = $request->total;
        $sell->save() ;
        $id_sell = $sell->id;

        //Guardar en la ventas plus

        if(count($request->id_book) > 0){
            for ($i=0; $i < count($request->id_book); $i++) { 
                
                $sell_plus = new Sells_plus;
                $sell_plus->id_sell = $id_sell;
                $sell_plus->id_books = $request->id_book[$i];
                $sell_plus->quantity = $request->newquantity[$i];
                $sell_plus->precies = $request->precio[$i];
                $sell_plus->save();
            }            
        }

        //restar la cantidad de la factura al inventario
        $book = Books::find($request->id_book);
        foreach ($book as $b) {
            $b->quantity =($b->quantity - $sell_plus->quantity);
            $b->save();
        }

        $empresa = Enterprise::all();

        $FactureCliente = Sells::where('sells.id',$id_sell)
                                ->select('sells.*','clientes.name','clientes.adress','clientes.phone','clientes.ci')
                                ->join('clientes','clientes.id','=','sells.id_client')
                                ->get();

        // dd($FactureCliente);
        $sell_plus = Sells_plus::where('id_sell', $id_sell)
                                ->select('sells_pluses.*','books.name')
                                ->join('books','books.id','sells_pluses.id_books')
                                ->get();
        $sell = sells::all();


        $pdf = PDF::loadView('pages.sells.invoice', compact('FactureCliente','empresa','sell_plus','sell'));
            return $pdf->stream('factura');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sells  $sells
     * @return \Illuminate\Http\Response
     */
    public function show(Sells $sells)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sells  $sells
     * @return \Illuminate\Http\Response
     */
    public function edit(Sells $sells)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sells  $sells
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sells $sells)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sells  $sells
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sells $sells)
    {
        //
    }
}
