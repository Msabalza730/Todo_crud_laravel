<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class Todoscontroller extends Controller
{
    // ------------   CRUD  ----------------------
    // store para guardar un todos 
    // update para actualizar un todos 
    // destroy para eliminar un todos
    // edit para mostear el formulario de edicion


    public function store(Request $request){

        $request->validate([
            'title'=>'required|min:3'
        ]);

        $todo = new Todo();
        $todo->title = $request->title;
        $todo->save();

        return redirect()->route('todos')->with('success','Tarea creada correctamente');
    }

    public function index() {
        $todos = Todo::all();
        return view('todos.index', ['todos' => $todos]);
    }


    public function show($id) {
        $todo = Todo::find($id);
        return view('todos.show', ['todo' => $todo]);
    }

    public function update(Request $request, $id) {
        $todo = Todo::find($id);
        $todo->title = $request->title;
        $todo->save();
        // dd($request); PARA VER Y HACER DEBUG
        // return view('todos.index', ['success' => 'Tarea Actualizada']);
        return redirect()->route('todos')->with('success', 'Tarea Actualizada');
    }

    public function destroy($id) {
        $todo =  Todo::find($id);
        $todo->delete();
        return redirect()->route('todos')->with('success', 'Tarea Eliminada');
    }
}
