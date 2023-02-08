<?php

use App\Http\Controllers\categoriescontroller;
use App\Http\Controllers\todoscontroller;
use Illuminate\Support\Facades\Route;




Route::get('/t', function () {
    return view('todos.index');
});

Route::get('/', function () {
    return view('vista');
});


Route::get('/tareas', [todoscontroller::class, 'index'])->name('todos');
Route::post('/tareas', [todoscontroller::class, 'store'])->name('todos');
Route::get('/tareas/{id}', [todoscontroller::class, 'show'])->name('todos-edit');
Route::patch('/tareas/{id}', [todoscontroller::class, 'update'])->name('todos-update');
Route::delete('/tareas/{id}', [todoscontroller::class, 'destroy'])->name('todos-destroy');




route::resource('categories', categoriescontroller::class);




