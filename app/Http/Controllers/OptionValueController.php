<?php

namespace App\Http\Controllers;

use App\Http\Requests\OptionValueRequest;
use App\OptionValue;

class OptionValueController extends Controller
{
    public function list()
    {
        return response()->json(OptionValue::query()->get());
    }

    public function create(OptionValueRequest $request)
    {
        return response()->json(OptionValue::query()->create($request->validated()));
    }

    public function get(OptionValue $optionValue)
    {
        return response()->json($optionValue);
    }

    public function update(OptionValueRequest $request, OptionValue $optionValue)
    {
        return response()->json($optionValue->update($request->validated()));
    }

    public function delete(OptionValue $optionValue)
    {
        return response()->json($optionValue->delete());
    }
}
