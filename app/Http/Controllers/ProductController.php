<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Show the product detail page for the given slug.
     */
    public function show(string $slug): View
    {
        $products = config('products', []);
        if (! isset($products[$slug])) {
            abort(404);
        }
        $product = $products[$slug];
        $product['slug'] = $slug;

        return view('frontend.products.show', [
            'product' => $product,
        ]);
    }
}
