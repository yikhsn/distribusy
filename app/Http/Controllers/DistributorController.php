<?php

namespace App\Http\Controllers;

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

    public function store()
    {
        $this->validate(request(), [
            'name'              => 'required',
            'address'           => 'required',
            'telephone'         => 'required'
        ]);

        Distributor::create([
            'name'              => request('name'),
            'address'           => request('address'),
            'telephone'         => request('telephone')
        ]);

        return redirect('/distributor');
    }

    public function edit($code)
    {
        $distributor = Distributor::where('id', $code)->first();

        return view('distributors.edit', compact('distributor'));
    }

    public function update($code)
    {
        $this->validate(request(), [
            'name'      => 'required',
            'address'   => 'required',
            'telephone' => 'required'
        ]);

        Distributor::where('id', $code)
                    ->update([
                        'name'      => request('name'),
                        'address'   => request('address'),
                        'telephone' => request('telephone')
                    ]);

        return redirect('/distributor');
    }
}
