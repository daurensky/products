<?php

namespace App\Http\Controllers\Stock;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate();
        return view('stock.product.index', compact('products'));
    }

    public function create()
    {
        $productCategories = ProductCategory::latest()->get();
        return view('stock.product.create', compact('productCategories'));
    }

    public function store(ProductRequest $request)
    {
        Product::create($request->validated());
        return to_route('stock.product.index');
    }

    public function show(Product $product)
    {
        return view('stock.product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $productCategories = ProductCategory::latest()->get();
        return view('stock.product.edit', compact('product', 'productCategories'));
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        return to_route('stock.product.show', $product);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return to_route('stock.product.index');
    }
}
