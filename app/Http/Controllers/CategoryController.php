<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function list()
    {
        return response()->json(Category::query()->with('products')->get());
    }

    public function get(Category $category)
    {
        return response()->json($category);
    }

    public function create(CategoryRequest $request)
    {
        return response()->json(Category::query()->create($request->validated()));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        return response()->json($category->update($request->validated()));
    }

    public function delete(Category $category)
    {
        return response()->json($category->delete());
    }
}
