<?php

namespace App\Http\Controllers;

use App\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cruds=Crud::paginate(6);

        return view('crud.index', compact('cruds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|max:190',
            'apellido'=>'required|max:190',
            'telefono'=>'required|max:190',
            'correo'=>'required|max:190|email',
            'direccion'=>'required|max:190',

        ]);

        Crud::create($request->all());

        return redirect()->route('crud.index')->with('status_success',' Agregado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Crud $crud)
    {
        return view('crud.show',compact('crud'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Crud $crud)
    {
        return view('crud.edit',compact('crud'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crud $crud)
    {
        $request->validate([
            'nombre'=>'required|max:190',
            'apellido'=>'required|max:190',
            'telefono'=>'required|max:190',
            'correo'=>'required|max:190|email',
            'direccion'=>'required|max:190',

        ]);
        $crud->update($request->all());

        return redirect()->route('crud.index')->with('status_success',' actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crud $crud)
    {
        $crud->delete();
        return redirect()->route('crud.index')->with('status_success',' eliminado con exito');
    }
}
