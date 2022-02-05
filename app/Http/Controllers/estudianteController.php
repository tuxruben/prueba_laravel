<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Estudiante;

class estudianteController extends Controller
{

      public function index()
    {
        $estudiantes = Estudiante::paginate(5);

        return view('estudiante.index',compact('estudiantes'))
            ;
    }
      public function create()
    {
        return view('estudiante.create');
    }
 public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'edad' => 'required|numeric',
             'email' =>  'required|email|unique:estudiante',
              'telefono' => 'required|numeric',
        ]);

        Estudiante::create($request->all());

        return redirect()->route('estudiante.index')
                        ->with('success','Estudiante created successfully.');
    }
       public function show(Estudiante $estudiante)
    {
        return view('estudiante.show',compact('estudiante'));
    }

       public function edit(Estudiante $estudiante)
    {
        return view('estudiante.edit',compact('estudiante'));
    }
      public function update(Request $request, Estudiante $estudiante)
    {
        $request->validate([
           'nombre' => 'required',
            'apellido' => 'required',
            'edad' => 'required|numeric',
             'email' =>  'required|email|unique:estudiante',
              'telefono' => 'required|numeric',
        ]);

        $estudiante->update($request->all());

        return redirect()->route('estudiante.index')
                        ->with('success','Estudiante updated successfully');
    }
      public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();

        return redirect()->route('estudiante.index')
                        ->with('success','Estudiante deleted successfully');
    }
}
