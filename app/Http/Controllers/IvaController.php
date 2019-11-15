<?php

namespace App\Http\Controllers;

use App\Iva;
use Illuminate\Http\Request;

use App\Http\Controllers\BinnacleController;

class IvaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Iva $model)
    {
        BinnacleController::AddBinnacle('Vista Iva','/iva');

        return view('pages.iva.index', ['ivas' => $model->paginate(10)]);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        BinnacleController::AddBinnacle('Vista Ediciones','/iva/create');

        return view('pages.iva.create');                
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Iva::create($request->all());
        BinnacleController::AddBinnacle('Crear Iva','/iva/store');

        return redirect()->route('iva.index')->withStatus(__('Iva creado Con Exito!'));   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Iva  $iva
     * @return \Illuminate\Http\Response
     */
    public function show(Iva $iva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Iva  $iva
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $iva = Iva::find($id);
        BinnacleController::AddBinnacle('Editar Iva','/iva/'.$id.'/edit');
        return view('pages.iva.edit',compact('iva'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Iva  $iva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $iva = Iva::find($id);
        $iva->update($request->all()); 
        BinnacleController::AddBinnacle('Actualizar Iva','/iva/update');

        return redirect()->route('iva.index')->withStatus(__('Iva Actualizado Con Exito!'));   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Iva  $iva
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $iva = Iva::find($id);
        $iva->delete();
        BinnacleController::AddBinnacle('Eliminar Iva','/iva/delete');

        return redirect()->route('iva.index')->withStatus(__('Iva Eliminado Con Exito!'));   
    }
}
