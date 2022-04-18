<?php

namespace App\Http\Controllers\Stock;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCategoryRequest;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $productCategories = ProductCategory::latest()->paginate();
        return view('stock.product_category.index', compact('productCategories'));
    }

    public function create()
    {
        return view('stock.product_category.create');
    }

    public function store(ProductCategoryRequest $request)
    {
        ProductCategory::create($request->validated());
        return to_route('stock.product-category.index');
    }

    public function show(ProductCategory $productCategory)
    {
        $products = $productCategory->products()->paginate();
        return view('stock.product_category.show', compact('productCategory', 'products'));
    }

    public function edit(ProductCategory $productCategory)
    {
        return view('stock.product_category.edit', compact('productCategory'));
    }

    public function update(ProductCategoryRequest $request, ProductCategory $productCategory)
    {
        $productCategory->update($request->validated());
        return to_route('stock.product-category.show', $productCategory);
    }

    public function destroy(ProductCategory $productCategory)
    {
        $productCategory->delete();
        return to_route('stock.product-category.index');
    }
}
