<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShopRequest;
use App\Models\Place;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::latest()->paginate();
        return view('operator.shop.index', compact('shops'));
    }

    public function create()
    {
        $places = Place::all();
        return view('operator.shop.create', compact('places'));
    }

    public function store(ShopRequest $request)
    {
        Shop::create($request->validated());
        return to_route('operator.shop.index');
    }

    public function show(Shop $shop)
    {
        return view('operator.shop.show', compact('shop'));
    }

    public function edit(Shop $shop)
    {
        $places = Place::all();
        return view('operator.shop.edit', compact('shop', 'places'));
    }

    public function update(ShopRequest $request, Shop $shop)
    {
        $shop->update($request->validated());
        return to_route('operator.shop.show', $shop);
    }

    public function destroy(Shop $shop)
    {
        $shop->delete();
        return to_route('operator.shop.index');
    }
}
