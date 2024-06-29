<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Asignacion;
use App\Models\Estudiantes;
use App\Models\Nota;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asignacions = Asignacion::all();
        return view('student.notas.index', compact('asignacions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $id_grado = $_GET['id_grado'];
        $estudiantes = Estudiantes::all();

        return view('student.notas.create', compact('estudiantes', 'id_grado'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          
    }

    /**
     * Display the specified resource.
     */
    public function show(Nota $nota)
    {
        return view('student.notas.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nota $nota)
    {
        return view('student.notas.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nota $nota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nota $nota )
    {
        //
    }
}
