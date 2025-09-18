<?php

namespace App\Http\Controllers;

use App\Models\Product; // <-- IMPORTANT: Import the Product model
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     * This will be your homepage and product gallery.
     */
    public function index()
    {
        // Fetch all products that are marked as "active" from the database.
        // We also order them by the newest first.
        $products = Product::where('is_active', true)->latest()->get();

        // Send the products data to the view file.
        return view('products.index', compact('products'));
    }

    /**
     * Display the specified product.
     * This is for the single product details page.
     */
    public function show(Product $product)
    {
        // Laravel's Route Model Binding automatically finds the product by its slug.
        return view('products.show', compact('product'));
    }
}