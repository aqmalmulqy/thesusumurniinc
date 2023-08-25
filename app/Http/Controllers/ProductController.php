<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function cart()
{
    $products = Product::all();
    return view('product.cart', compact('products'));
}

public function updateCart(Request $request)
{
    // Get the product ID, name, and price from the request
    $productId = $request->input('id');
    $productName = $request->input('name');
    $productPrice = $request->input('price');

    // Validate the input data (you should add more validation as needed)
    $request->validate([
        'id' => 'required|numeric',
        'name' => 'required|string',
        'price' => 'required|numeric',
    ]);

    // Create a new cart item
    $item = [
        'id' => $productId,
        'name' => $productName,
        'price' => $productPrice,
        'quantity' => 1,
    ];

    // Get the current cart from the session
    $cart = session()->get('product.cart', []);

    // Check if the item already exists in the cart and update its quantity if necessary
    $itemExists = false;
    foreach ($cart as &$cartItem) {
        if ($cartItem['id'] === $item['id']) {
            $cartItem['quantity']++;
            $itemExists = true;
            break;
        }
    }

    // If the item doesn't exist, add it to the cart
    if (!$itemExists) {
        $cart[] = $item;
    }

    // Store the updated cart back in the session
    session()->put('product.cart', $cart);

    // Return the updated cart contents in JSON format
    return response()->json($cart);
}



    public function show($slug)
    {
        return view('Product', [
            "title" => "Single Product",
            "Product" => Product::find($slug)
        ]);

        
    }

    
}
