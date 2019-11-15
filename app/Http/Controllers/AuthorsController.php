<?php

namespace App\Http\Controllers;

use App\Authors;
use Illuminate\Http\Request;
use App\Http\Requests\AuthorsRequestCreate;
use App\Http\Requests\AuthorsRequestUpdate;

use App\Http\Controllers\BinnacleController;


class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Authors $model)
    {
        BinnacleController::AddBinnacle('Vista Autores','/authors');
        return view('pages.authors.index', ['authors' => $model->paginate(10)]);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        BinnacleController::AddBinnacle('Crear Autores','/authors/create');
        return view('pages.authors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorsRequestCreate $request)
    {
        $author = Authors::create($request->all());
        BinnacleController::AddBinnacle('Crear Autores','/authors/store');
        return redirect()->route('authors.index')->withStatus(__('Autor creado Con Exito!'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $author = Authors::find($id);
        BinnacleController::AddBinnacle('Editar Autor','/authors/'.$id.'/edit');
        return view('pages.authors.edit',compact('author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function update(AuthorsRequestUpdate $request, $id)
    {
        $author = Authors::find($id);
        $author->update($request->all());
        BinnacleController::AddBinnacle('Actualizar Autor','/authors/update');
        return redirect()->route('authors.index')->withStatus(__('Autor Actualizado Con Exito!'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $author = Authors::find($id);
        $author->delete();
        BinnacleController::AddBinnacle('Eliminar Autor','/authors/delete');
        return redirect()->route('authors.index')->withStatus(__('Autor Eliminado Con Exito!'));
    }
}
