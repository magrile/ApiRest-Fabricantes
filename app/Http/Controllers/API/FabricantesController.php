<?php

namespace App\Http\Controllers\API;

use App\Models\Fabricantes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\GuardarFabricanteRequest;

class FabricantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Fabricantes::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Fabricantes::create($request->all());
        return response()->json([
        'res' => true,
        'mensaje' => 'Fabricante guardado correctamente'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Fabricantes $fabricantes)
    {
        {
            return response()->json([
           'res' => true,
           'fabricantes' => $fabricantes
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fabricantes $fabricantes)
    {
        $fabricantes->update($request->all());
			return response()->json([
				'res' => true,
				'mensaje' => 'Fabricantes actualizados correctamente'
			], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fabricantes $fabricantes)
    {
        $fabricantes->delete();

        return response()->json([
            'res' => true,
            'mensaje' => 'Estudiante eliminado correctamente'
        ], 200);
    }
}
