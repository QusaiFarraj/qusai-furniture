<?php

namespace App\Http\Controllers;

use App\Http\Requests\OptionRequest;
use App\Option;

class OptionController extends Controller
{
    public function list()
    {
        return response()->json(Option::with('values')->get());
    }

    public function get(Option $option)
    {
        return response()->json($option);
    }

    public function create(OptionRequest $request)
    {
        return response()->json(Option::query()->create($request->all()));
    }

    public function update(OptionRequest $request, Option $option)
    {
        return response()->json($option->update($request->all()));
    }

    public function delete(Option $option)
    {
        return response()->json($option->delete());
    }
}
