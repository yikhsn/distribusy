<?php

namespace App\Http\Controllers;

use App\Http\Requests\DistributorRequest;
use Illuminate\Http\Request;
use App\Distributor;
use App\Item;

class DistributorController extends Controller
{
    public function index()
    {
        /**
         * get data items with eager loader (using with())
         * for not repeat (loop) accessing database
         */
        $distributors = Distributor::with('items')->get();

        return view('distributors.index', compact('distributors'));
    }

    public function show($code)
    {
        /**
         * get data items with eager loader (using with()) 
         * for not repeat (loop) accessing database
         */
        $distributor = Distributor::with('items')->find($code);

        return view('distributors.show', compact('distributor'));
    }

    public function create()
    {
        return view('distributors.create');
    }

    public function store(DistributorRequest $request)
    {
        Distributor::create([
            'name'              => request('name'),
            'owner'             => request('owner'),
            'province'          => request('province'),
            'city'              => request('city'),
            'address'           => request('address'),
            'address_2'         => request('address_2'),
            'telephone'         => request('telephone'),
            'email'             => request('email'),
            'account'           => request('account'),
            'bill'              => request('bill'),
            'distance'          => request('distance')
        ]);

        return redirect('/distributor');
    }

    public function edit($code)
    {
        $distributor = Distributor::where('id', $code)->first();

        return view('distributors.edit', compact('distributor'));
    }

    public function update($code, DistributorRequest $request)
    {
        Distributor::where('id', $code)
                    ->update([
                        'name'              => request('name'),
                        'owner'             => request('owner'),
                        'province'          => request('province'),
                        'city'              => request('city'),
                        'address'           => request('address'),
                        'address_2'         => request('address_2'),
                        'telephone'         => request('telephone'),
                        'email'             => request('email'),
                        'account'           => request('account'),
                        'bill'              => request('bill'),
                        'distance'          => request('distance')
                    ]);

        return redirect('/distributor');
    }
}
