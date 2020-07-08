<?php

namespace App\Http\Controllers\API\v1;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ItemResource;
use App\Http\Resources\ItemResourceCollection;

class ItemController extends Controller
{
    public function index(): ItemResourceCollection
    {
        return new ItemResourceCollection(Item::all());
    }

    public function show(Item $item): ItemResource
    {
        return new ItemResource($item);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $item = Item::create($request->all());

        return new ItemResource($item);
    }

    public function update(Item $item, Request $request): ItemResource
    {
        $item->update($request->all());

        return new ItemResource($item);
    }

    public function destroy(Item $item)
    {
        $item->delete();

        return response()->json();
    }
}
