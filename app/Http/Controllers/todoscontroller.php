<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class todoscontroller extends Controller
{
    //

    

public function store(Request $request){
        $request->validate([
            'title' => 'required|min:3'
            
        ]);

        $todo = new todo;
        $todo->title = $request->title;
        $todo->save();

        return redirect()->route('todos')->with('success', 'tarea creada correctamente');

}



public function index(){
    $todos= Todo::all();
    return view('todos.index', ['todos' => $todos]);
}





public function show($id){
    $todo = Todo::find($id);
    return view('todos/show', ['todo' => $todo]);
}


public function update(request $request, $id){
    $todo = Todo::find($id);
        $todo->title = $request->title;
        $todo->save();


        return redirect()->route('todos')->with('success', 'tarea actualizada');
   // return view('todos/show', ['success' => 'tarea actualizada']);
}



public function destroy($id){
    $todo = Todo::find($id);
        $todo->delete();
        return redirect()->route('todos')->with('success', 'tarea a sido eliminada');
}

}




