<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getAllProducts()
    {
        $products = Product::all(); // Fetch all products
        return $products;
    }

    public function getProductById($id)
    {
        $product = Product::where('product_id',$id)->first();

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        return $product;
    }
}
