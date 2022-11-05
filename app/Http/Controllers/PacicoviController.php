<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacicovi;

class PacicoviController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacicovis = Pacicovi::all();
        return view('pacicovi.index')->with('pacicovis',$pacicovis);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pacicovi.create');

    }

    /**
     * Store a newly created resource in storage.
     
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //Este codigo fue probado y revisado por el compañero Josue Galloso 
     //Comentario de Josue Galloso con respecto al codigo de Store el cual su funcionalidad es guardar los datos registrados 
     //de la vista REGISTRAR PACIENTE COVID del modulo "pacientes covid" 
     //COMENTARIO: Analizando el codigo se puede ver que esta bien, la funcion esta declara de la manera correcta 
     // las variables y los nombres de los campos de la base de datos esta escritos correctamente.   
    public function store(Request $request)
    {
        $pacicovis = new Pacicovi();

        $pacicovis->nombre = $request->get('nombre');
        $pacicovis->apellido = $request->get('apellido');
        $pacicovis->carrera = $request->get('carrera');
        $pacicovis->fechaconsulta = $request->get('fechaconsulta');
        $pacicovis->estatus = $request->get('estatus');

        $pacicovis->save();

        return redirect('/pacicovis');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pacicovi = Pacicovi::find($id);
        return view('pacicovi.edit')->with('pacicovi',$pacicovi);

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
        $pacicovi = Pacicovi::find($id);

        $pacicovi->nombres = $request->get('nombre');
        $pacicovi->apellido = $request->get('apellido');
        $pacicovi->carrera = $request->get('carrera');
        $pacicovi->fechaconsulta = $request->get('fechaconsulta');
        $pacicovi->estatus = $request->get('estatus');

        $pacicovi->save();

        return redirect('/pacicovis');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pacicovi = Pacicovi::find($id);
        $pacicovi->delete();
        return redirect('/pacicovis');

    }
}
