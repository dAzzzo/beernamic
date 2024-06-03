<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $cartItems = Cart::where('UserID', $userId)->with('product')->get();

        $productos = $cartItems->pluck('product');

    return view('cart.index', compact('cartItems', 'productos'));
    }

    public function add(Request $request)
    {
        $userId = Auth::id();
        $productId = $request->input('id');
        $quantity = $request->input('quantity', 1);

        $cartItem = Cart::where('UserID', $userId)->where('id', $productId)->first();

        if ($cartItem) {
            $cartItem->Cantidad += $quantity;
            $cartItem->save();
        } else {
            Cart::create([
                'UserID' => $userId,
                'id' => $productId,
                'Cantidad' => $quantity
            ]);
        }

        return redirect()->route('cart.index');
    }

    public function remove(Request $request)
    {
        $userId = Auth::id();
        $productId = $request->input('id');

        Cart::where('UserID', $userId)->where('id', $productId)->delete();

        return redirect()->route('cart.index');
    }

    public function update(Request $request)
    {
        $userId = Auth::id();
        $productId = $request->input('id');
        $quantity = $request->input('quantity');

        $cartItem = Cart::where('UserID', $userId)->where('id', $productId)->first();

        if ($cartItem && $quantity > 0) {
            $cartItem->Cantidad = $quantity;
            $cartItem->save();
        } elseif ($cartItem && $quantity <= 0) {
            $cartItem->delete();
        }

        return redirect()->route('cart.index');
    }
}
