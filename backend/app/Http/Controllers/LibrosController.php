<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libros;
use App\Http\Requests\Librosform;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libros::all();
        //return response()->json(['success' => true, 'libros' => $libros]);
        return response()->json($libros);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')){
            $libros = new Libros();
            $libros->author = $request->input('author');
            $libros->name = $request->input('name');
            $libros->description = $request->input('description');
            $libros->price = $request->input('price');
            $libros->save();
            return response()->json(['success' => true, 'message' => 'Libro guardado']);
        } else {
            //return response()->json(['success' => false, 'message' => 'Algo salio mal']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $libro = Libros::find($request->id);
        return response()->json(['libro', $libro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $libro = Libro::find($id);
        return response()->json(['libro' => $libro]);
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
        if ($request->ajax()) {
            $libros = Libros::find($request->id);
            $libros->author = $request->input('author');
            $libros->name = $request->input('name');
            $libros->description = $request->input('description');
            $libros->price = $request->input('price');
            $libros->save();
            return response()->json(['message' => 'Libro saved']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $libro = Libros::find($id);
        $libro->delete();
        return response()->json(['message' => 'Libro removed']);
    }
}
