<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //Get category
    public function index()
    {
        return response()->json(Category::all(),200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //Insert category
    public function store(Request $request)
    {
        $category = Category::create($request->all());
        return response($category,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //Get Category by id
    public function show($id)
    {
        $category = Category::find($id);
        if(is_null($category))
        {
            return response()->json(['message'=> 'Registro no encontrado',404]);
        }

        return response()->json($category::find($id), 200);
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
        $category= Category::find($id);
        if(is_null($category))
        {
            return response()->json(['message'=> 'Registro no encontrado',404]);
        }

        $category->update($request->all());
        return response($category,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category= Category::find($id);
        if(is_null($category))
        {
            return response()->json(['message'=> 'Registro no encontrado',404]);
        }

        $category->delete();
        return response(['message'=> 'Registro eliminado', 200]);

    }
}
