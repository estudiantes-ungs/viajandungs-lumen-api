<?php

namespace App\Http\Controllers;

use App\Viaje;
use Illuminate\Http\Request;

class ViajeController extends Controller
{

    public function showAllViajes()
    {
        return response()->json(Viaje::all());
    }

    public function showOneViaje($id)
    {
        return response()->json(Viaje::find($id));
    }

    public function create(Request $request)
    {
        $Viaje = Viaje::create($request->all());

        return response()->json($Viaje, 201);
    }

    public function update($id, Request $request)
    {
        $Viaje = Viaje::findOrFail($id);
        $Viaje->update($request->all());

        return response()->json($Viaje, 200);
    }

    public function delete($id)
    {
        Viaje::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}