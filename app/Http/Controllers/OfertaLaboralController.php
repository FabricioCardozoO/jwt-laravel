<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OfertaLaboral;
use Illuminate\Support\Facades\Validator;

class OfertaLaboralController extends Controller
{
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre_oferta' => 'required|string|max:255',
            'user_id' => 'required',
            'estado' => 'required|string|max:255',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(),400);
        }

        $oferta_laboral = OfertaLaboral::create([
            'nombre_oferta' => $request->get('nombre_oferta'),
            'user_id' => $request->get('user_id'),
            'estado' => $request->get('estado'),
        ]);

        return response()->json(compact('oferta_laboral'),201);

    }

    public function obtenerOfertas($user_id)
    {
        
        $ofertas = OfertaLaboral::where("user_id", $user_id)
        ->get();

        return response()->json(compact('ofertas'),201);
    }
}
