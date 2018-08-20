<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    public function index()
    {
       /**
         * get data items with eager loader (using with())
         * for not repeat (loop) accessing database
         */
        $items = Item::with('distributors')->get();

        return view('items.index', compact('items'));
    }

    public function show($code)
    {
       /**
         * get data items with eager loader (using with())
         * for not repeat (loop) accessing database
         */
        $item = Item::with('distributors')->where('code', $code)->first();

        return view('items.show', compact('item'));
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(ItemRequest $request)
    {
        Item::create([
            'code'          => request('code'),
            'name'          => request('name'),
            'stock'         => request('stock'),
            'price'         => request('price'),
            'description'   => request('description'),
            'weight'        => request('weight'),
            'dimention'     => request('dimention'),
            'material'      => request('material')
        ]);

        return redirect('/item');
    }

    public function edit($code)
    {
        $item = Item::where('code', $code)->first();

        return view('items/edit', compact('item'));
    }

    public function update($code, ItemRequest $request)
    {
        Item::where('code', $code)
            ->update([
                'code'          => request('code'),
                'name'          => request('name'),
                'stock'         => request('stock'),
                'price'         => request('price'),
                'description'   => request('description'),
                'weight'        => request('weight'),
                'dimention'     => request('dimention'),
                'material'      => request('material')
            ]);

        return redirect('/item');
    }
}
