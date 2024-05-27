<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductosController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //Los productos se paginaran de 8 en 8
    //     $productos = Producto::paginate(7); 
    //     return view('productos.index')->with('productos', $productos);
    // }

    //Este nuevo codigo sirve para lo anterior y el filtrado
    //Ahora recoge los productos, crea la paginación y filtra
    public function index(Request $request)
    {
        $query = Producto::query();

        // Filtrar por marca si se ha seleccionado
        if ($request->filled('marca')) {
            $query->where('marca', $request->input('marca'));
        }

        // Filtrar por variedad si se ha seleccionado
        if ($request->filled('variedad')) {
            $query->where('variedad', $request->input('variedad'));
        }

        // Obtener los productos paginados
        $productos = $query->paginate(7);

        // Obtener todas las marcas y variedades para los select options
        $marcas = Producto::select('marca')->distinct()->pluck('marca');
        $variedades = Producto::select('variedad')->distinct()->pluck('variedad');

        return view('productos.index', compact('productos', 'marcas', 'variedades'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Producto::create($request->all());
        return redirect()->route('productos.index')
                         ->with('success', 'Producto creado exitosamente.');
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $producto->update($request->all());
        return redirect()->route('productos.index')
                         ->with('success', 'Producto actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')
                         ->with('success', 'Producto eliminado exitosamente.');
    }
}
