<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;

class ProductController extends Controller
{
    public function list()
    {
        return response()->json(Product::query()->with('options', 'optionValues')->get());
    }

    public function get(Product $product)
    {
        return response()->json($product);
    }

    public function create(ProductRequest $request)
    {
        return response()->json(Product::query()->create($request->validated()));
    }

    public function update(ProductRequest $request, Product $product)
    {
        return response()->json($product->update($request->validated()));
    }

    public function delete(Product $product)
    {
        return response()->json($product->delete());
    }
}
