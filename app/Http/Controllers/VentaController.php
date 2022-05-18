<?php

namespace App\Http\Controllers;

use App\Productos;
use App\Categorias;
use App\Ventas;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $productos = Productos::select('productos.id','productos.nombre AS nomProducto','productos.referencia','productos.precio','productos.peso','productos.stock','productos.created_at','categorias.nombre')        
            ->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
            ->get();

        return view('venta', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $productos2 = Productos::findOrFail($id);        

        $cantidadBase = $productos2->stock;
        $cantidadVenta = $request->vetanCantidad;
        $idProducto = $productos2->id;
        
        if($cantidadVenta == NULL || $cantidadVenta == ''){
            return "No es posible realizar la venta: cantidad 0";
        }

        if($cantidadBase >= $cantidadVenta){
            $total = ($cantidadBase - $cantidadVenta);
            
            
            $productos2->update([                
                'stock' => $total,                
            ]);
            
            Ventas::create([
                'productos_id' => $idProducto,
                'cantidad' => $cantidadVenta,
            ]);


        }elseif($cantidadBase < $cantidadVenta){
            return "No es posible realizar la venta";    
        }        
                
        $productos = Productos::select('productos.id','productos.nombre AS nomProducto','productos.referencia','productos.precio','productos.peso','productos.stock','productos.created_at','categorias.nombre')        
            ->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
            ->get();

        return view('venta', compact('productos'));
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
       
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
