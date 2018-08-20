<?php

namespace App\Http\Controllers;

use App\Http\Requests\DistributorItemRequest;
use Illuminate\Http\Request;
use App\Distributor;

class DistributorItemController extends Controller
{
    public function create($distributor_id)
    {
        $distributor = Distributor::with('items')->find($distributor_id);

        return view('distributors.items.create', compact('distributor'));
    }

    /**
     * using attach method to add data
     * with extra field on pivot many to many table
     */
    public function store($distributor_id, DistributorItemRequest $request)
    {
        $distributor = Distributor::find($distributor_id);

        $distributor->items()->attach( [ request('item_id') =>  [
            'total'     => request('total'),
            'quantity'  => request('quantity') 
        ] ]);
    }

    /**
     * using detach method to delete data
     * on pivot table many to many relation
     */
    public function delete($distributor_id, $item_id)
    {
    
        $distributor = Distributor::find($distributor_id);

        $distributor->items()->detach($item_id);
    }

     /**
     * page form to change data on pivot table
     */
    public function edit($distributor_id, $item_id)
    {
        $item = Distributor::find($distributor_id)
                            ->items()
                            ->where('item_id', $item_id)
                            ->first();

        return view('distributors.items.edit', compact('item', 'distributor_id'));
    }

    /**
     * update data on pivot table
     */
    public function update($distributor_id, $item_id)
    {
        $this->validate(request(), [
            'quantity'      => 'required',
            'total'         => 'required'
        ]);

        $distributor = 
            Distributor::find($distributor_id)
                        ->items()
                        ->updateExistingPivot($item_id, [ 
                            'total'     => request('total') ,
                            'quantity'  => request('quantity')
            ]);
    }
}
