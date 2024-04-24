<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiantes = Estudiante::all();
        return response()->json([
            'status' => 'ok',
            'data' => $estudiantes
        ], 200);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $e = Estudiante::create($request->all());
        return response()->json([
           'status' => 'ok',
            'data' => $e
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $estudiantes = Estudiante::find($id);
        return response()->json([
            'status' => 'ok',
            'data' => $estudiantes
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $e = Estudiante::find($id)->fill($request->all())->save();
        return response()->json([
           'status' => 'ok',
            'data' => $e
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $e = Estudiante::find($id)->delete();
        return response()->json([
            'status' => 'ok',
            'message' => "Estudiante eliminado con éxito"
        ], 200);
    }
}
