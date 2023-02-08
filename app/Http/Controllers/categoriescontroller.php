<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\category;
use Symfony\Contracts\Service\Attribute\Required;

class categoriescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = category::all();

        return view('categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->valide([
            'name' => 'required|uniqued:categories|max:255',
            'color' => 'required | max:7'
        ]);
        $category = new category;
        $category->name = $request ->name;
        $category->name1 =$request->name1;
        $category->name2 =$request->name2;
        $category->name3 =$request->name3;
        $category->save();


        return redirect()->route('categories.index')->with('success', 'nueva categoria agregar');
                }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = category::find($id);
        return view('categories.show', ['category => $category']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = category::find($id);
        $category->name = $request->name;
        $category->name1 = $request->name1;
        $category->name2 = $request->name2;
        $category->name3 = $request->name3;
        $category->save();


        return redirect()->route('categories.index')->with('success', 'categoria actualizada');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = category::find($id);
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'categoria eliminada'); 
    }
}
