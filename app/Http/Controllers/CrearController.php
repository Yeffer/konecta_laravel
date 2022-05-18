<?php

namespace App\Http\Controllers;

use App\Productos;
use App\Categorias;
use Illuminate\Http\Request;

class CrearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categorias = Categorias::select('categorias.id','categorias.nombre')->get();

        return view('crear', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categorias::select('categorias.id','categorias.nombre')->get();
                
        return view('crear', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request()->validate([
            'nombre' => 'required',
            'referencia' => 'required',
            'precio' => 'required',
            'peso' => 'required',            
            'stock' => 'required',
        ]);    

        Productos::create([
            'nombre' => request('nombre'),
            'referencia' => request('referencia'),
            'precio' => request('precio'),
            'peso' => request('peso'),
            'stock' => request('stock'),
            'categoria_id' =>  request('categoria_id'),
        ]);


        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productos = Productos::findOrFail($id);        
        $categorias = Categorias::select('categorias.id','categorias.nombre')->get();

        return view('editar', compact('productos', 'categorias'));
        
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
        request()->validate([
            'nombre' => 'required',
            'referencia' => 'required',
            'precio' => 'required',
            'peso' => 'required',            
            'stock' => 'required',
        ]);

        
        $productos = Productos::findOrFail($id);
        
        $productos->update([
            'nombre' => request('nombre'),
            'referencia' => request('referencia'),
            'precio' => request('precio'),
            'peso' => request('peso'),
            'stock' => request('stock'),
            'categoria_id' => request('categoria_id'),
        ]); 


        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        
        $productos = Productos::findOrFail($id);
        $productos->delete();

        return redirect()->route('home');
    }
}
