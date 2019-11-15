<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Enterprise;

class EnterpriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enterprises = Enterprise::all();
        //dd($enterprises);
        return view('pages.enterprise.index',compact('enterprises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.enterprise.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //opcion una para registrar en base de datos

        /*
            $enterprise = new Enterprise;
            $enterprise->name = $request-name;
            $enterprise->adress = $request-adress;
            $enterprise->phone = $request-phone;
            $enterprise->rif = $request-rif;
            $enterprise->save();
        */

        //opcion dos para registrar en base de datos

        Enterprise::create($request->all());

        return redirect()->route('enterprise.index')->withStatus(__('La empresa fue creada con exito'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //dd('hola');
        $enterprise = Enterprise::find($id);

        //$enterprise = Enterprise::where('id',$id);
        return view('pages.enterprise.show',compact('enterprise'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Enterprise $enterprise)
    {
        //$enterprise = Enterprise::find($id);

        //$enterprise = Enterprise::where('id',$id);
        return view('pages.enterprise.edit',compact('enterprise'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //opcion una para registrar en base de datos

        
            $enterprise = Enterprise::find($id);
            $enterprise->name = $request->name;
            $enterprise->adress = $request->adress;
            $enterprise->phone = $request->phone;
            $enterprise->rif = $request->rif;
            $enterprise->save();

            return redirect()->route('enterprise.index')->withStatus(__('La empresa fue actualizada con exito'));        

        //opcion dos para registrar en base de datos

        /*$enterprise = Enterprise::find($id);
        $enterprise->update($request->all());*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enterprise = Enterprise::find($id);
        $enterprise->delete();
    }
}
