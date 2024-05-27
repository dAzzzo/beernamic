<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = session()->get('cart', []);
        return view('cart.index', compact('cartItems'));
    }

    public function addToCart($id)
    {
        $producto = Producto::findOrFail($id);
    
        $cart = session()->get('cart', []);
    
        if (isset($cart[$id])) {
            $cart[$id]['cantidad']++;
        } else {
            $cart[$id] = [
                'id' => $producto->id,
                'nombre' => $producto->marca . ' - ' . $producto->variedad,
                'precio' => $producto->precio,
                'stock' => $producto->stock,
                'img' => $producto->img,
                'cantidad' => 1,
            ];
        }
    
        session()->put('cart', $cart);
    
        return redirect()->route('cart.index')->with('success', 'Producto añadido al carrito correctamente.');
    }
    


    public function update(Request $request, $id)
    {
        if ($request->quantity <= 0) {
            return redirect()->route('cart.index')->with('error', 'Cantidad no válida!');
        }

        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
            return redirect()->route('cart.index')->with('success', 'Cantidad actualizada!');
        }

        return redirect()->route('cart.index')->with('error', 'Producto no encontrado en el carrito!');
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
            return redirect()->route('cart.index')->with('success', 'Producto eliminado!');
        }

        return redirect()->route('cart.index')->with('error', 'Producto no encontrado en el carrito!');
    }

    public function showCart()
{
    $cartItems = session()->get('cart', []);
    return view('cart.index', compact('cartItems'));
}

}
