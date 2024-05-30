<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class ProductosController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin')->except(['index', 'show']);
    }
    
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
    public function index(Request $request): Response
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
        $productos = $query->paginate(8);

        // Obtener todas las marcas y variedades para los select options
        $marcas = Producto::select('marca')->distinct()->pluck('marca');
        $variedades = Producto::select('variedad')->distinct()->pluck('variedad');

        return response()->view('productos.index', compact('productos', 'marcas', 'variedades'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): Response
    {
        return response()->view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'marca' => 'required|string|max:255',
            'variedad' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
            'Img' => 'required|image',
        ]);

        $imagePath = $request->file('Img')->store('cervezas', 'public');

        Producto::create([
            'marca' => $request->marca,
            'variedad' => $request->variedad,
            'precio' => $request->precio,
            'stock' => $request->stock,
            'Img' => basename($imagePath),
        ]);

        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto): Response
    {
        return response()->view('productos.show', compact('producto'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id): Response
    {
        $producto = Producto::findOrFail($id);
        return response()->view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto): RedirectResponse
    {
        $request->validate([
            'marca' => 'required|string|max:255',
            'variedad' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
            'Img' => 'sometimes|image',
        ]);

        if ($request->hasFile('Img')) {
            $imagePath = $request->file('Img')->store('cervezas', 'public');
            $producto->Img = basename($imagePath);
        }

        $producto->update([
            'marca' => $request->marca,
            'variedad' => $request->variedad,
            'precio' => $request->precio,
            'stock' => $request->stock,
        ]);

        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
    } 
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto): RedirectResponse
    {
        $producto->delete();
        return redirect()->route('productos.index')
                         ->with('success', 'Producto eliminado exitosamente.');
    }
}
