<?php

namespace App\Http\Controllers;

use App\Editions;
use App\Authors;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests\EditionsRequestCreate;
use App\Http\Requests\EditionsRequestUpdate;

use App\Http\Controllers\BinnacleController;

class EditionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Editions $model)
    {
        $editions = Editions::select('editions.*','authors.name as name_author')
                        ->join('authors', 'authors.id','=','editions.id_author')
                        ->get();

        BinnacleController::AddBinnacle('Vista Ediciones','/editions');
        
        return view('pages.editions.index', compact('editions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Authors::pluck('name','id');
        BinnacleController::AddBinnacle('Crear Ediciones','/editions/create');
        return view('pages.editions.create', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EditionsRequestCreate $request)
    {
        Editions::create($request->all());
        BinnacleController::AddBinnacle('Crear Ediciones','/editions/store');
        return redirect()->route('editions.index')->withStatus(__('Edicion creada Con Exito!'));   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Editions  $editions
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $author = DB::table('editions')->select('*')->where('id_author',$id)->get();
        return response()->json($author);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Editions  $editions
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edition = Editions::find($id);
        $authors = Authors::pluck('name','id');
        BinnacleController::AddBinnacle('Editar Edicion','/editions/'.$id.'/edit');

        return view('pages.editions.edit', compact('edition','authors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Editions  $editions
     * @return \Illuminate\Http\Response
     */
    public function update(EditionsRequestUpdate $request, $id)
    {
        $edition = Editions::find($id);
        $edition->update($request->all());
        BinnacleController::AddBinnacle('Actualizar Edicion','/editions/update');
        return redirect()->route('editions.index')->withStatus(__('Autor Actualizado Con Exito!'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Editions  $editions
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $edition = Editions::find($id);
        $edition->delete();
        BinnacleController::AddBinnacle('Eliminar Edicion','/editions/update');
        return redirect()->route('editions.index')->withStatus(__('Edicion Eliminado Con Exito!'));   
    }
}
