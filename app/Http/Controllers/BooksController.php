<?php

namespace App\Http\Controllers;

use App\Books;
use App\Authors;
use App\Editions;
use Illuminate\Http\Request;

use App\Http\Requests\BooksRequestCreate;
use App\Http\Requests\BooksRequestUpdate;

use App\Http\Controllers\BinnacleController;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Books $model)
    {
        $books = Books::select('books.*','editions.name as name_edition')
                        ->join('editions', 'editions.id','=','books.id_edition')
                        ->get();

            //BinnacleController::AddBinnacle('Vista Ediciones','/editions');

        $auth = Authors::all();
        $edition = Editions::all();

        return view('pages.books.index', ['books' => $model->paginate(10), 'auth' => $auth,'edition'=> $edition]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $auth = Authors::all()->pluck('name','id');
        return view('pages.books.create',['auth' => $auth]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BooksRequestCreate $request)
    {
        //dd($request);
        Books::create($request->all());
        return redirect()->route('books.index')->withStatus(__('Libro Creado Con Exito!'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Books::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $auth = Authors::all()->pluck('name','id');
        //$edition = Edition::all()->pluck('name','id');
        $book = Books::find($id);
        return view('pages.books.edit',compact('book','auth'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(BooksRequestUpdate $request, $id)
    {
        $book = Books::find($id);
        $book->cod = $request->cod;
        $book->name = $request->name;
        $book->id_author = $request->id_author;
        $book->id_edition = $request->id_edition;
        $book->quantity = $request->quantity;
        $book->precie = $request->precie;
        $book->year = $request->year;
        $book->save();

        return redirect()->route('books.index')->withStatus(__('El Libro fue Actualizada con Exito'));        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Books::find($id);
        $book->delete();
        BinnacleController::AddBinnacle('Eliminar libro','/books/update');
        return redirect()->route('books.index')->withStatus(__('Libro Eliminado Con Exito!'));
        
        //Books->quantity + $request->quantity; 
    }
    public function ingresarStock($id) 
    {
        $auth = Authors::all()->pluck('name','id');
        //$edition = Edition::all()->pluck('name','id');
        $book = Books::find($id);
        return view('pages.books.viewquantity',compact('book','auth'));
    }
    public function sumarStock(Request $request ,$id)
    {
        $book = Books::find($id);
        $book->cod =$book->cod;
        $book->quantity =($book->quantity + $request->quantity);
        $book->save();

        return redirect()->route('books.index')->withStatus(__('El Libro fue Actualizada con Exito'));        
    }
}
