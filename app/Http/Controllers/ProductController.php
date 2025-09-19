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
        // Fetch a paginated list of products that are "active".
        // We also order them by the newest first.
        // The paginate() method automatically handles which page the user is on.
        $products = Product::where('is_active', true)->latest()->paginate(12); // <-- THE ONLY CHANGE IS HERE

        // Send the paginated products data to the view file.
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
