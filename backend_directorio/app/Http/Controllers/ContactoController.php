<?php

namespace App\Http\Controllers;

use App\Models\contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return contacto::with(['telefono', 'correo', 'direccion'])->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datos = contacto::create($request->all());
        $datos->phones()->createMany($request->phones);
        $datos->emails()->createMany($request->emails);
        $datos->addresses()->createMany($request->addresses);
        return response()->json($datos, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(contacto $contacto)
    {
        //
        return $contacto->load(['telefono', 'correo', 'direccion']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contacto $contacto)
    {
        //
        $contacto->update($request->all());
        $contacto->phones()->delete();
        $contacto->emails()->delete();
        $contacto->addresses()->delete();
        $contacto->phones()->createMany($request->phones);
        $contacto->emails()->createMany($request->emails);
        $contacto->addresses()->createMany($request->addresses);
        return response()->json($contacto, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contacto $contacto)
    {
        //
        $contacto->delete();
        return response()->json(null, 204);
    }
}
