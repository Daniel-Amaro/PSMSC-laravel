<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publications;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PublicationsController extends Controller
{
    public function index()
    {
    	$Publications = \App\Models\Publications::get();

    	return response()->json([
    			"msg"=> "success",
    			"Publicaciones"=> $Publications->toArray()
    	       ],200
    	);
    }

    public function show($idPublication)
    {
        $Publication = \App\Models\Publications::find($idPublication);
        return response()->json([
                "msg"=> "success",
                "Publicación"=> $Publication
               ],200
        );
    }

    public function store(Request $request)
    {   
        $Publication = new \App\Models\Publications();
        $Publication->nombre = $request->nombre;
        $Publication->precio = $request->precio;
        $Publication->inicioOferta = $request->inicioOferta;
        $Publication->finOferta = $request->finOferta;
        $Publication->detallesUbicacion = $request->detallesUbicacion;
        $Publication->save();

        return response()->json([
                "msg"=> "success",
                "Publicación creada: "=> $Publication->nombre
               ],200
        );
    }

    public function update(Request $request, $idPublication)
    {
        
    }

    public function destroy()
    {
       
    }


}
