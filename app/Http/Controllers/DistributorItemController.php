<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distributor;

class DistributorItemController extends Controller
{
    public function create($distributor_id)
    {
        return view('distributors.items.add', compact('distributor_id'));
    }

    /**
     * using attach method to add data
     * with extra field on pivot many to many table
     */
    public function store($distributor_id)
    {
        $this->validate(request(), [
            // 'distributor_id'    => 'required',
            'item_id'           => 'required',
            'total'             => 'required'
        ]);

        $distributor = Distributor::find($distributor_id);

        $distributor->items()->attach( [
            request('item_id') =>  ['total' => request('total')]
        ]);
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
     * update data on pivot table
     */
    public function update($distributor_id, $item_id)
    {
        $this->validate(request(), ['total' => 'required']);

        $distributor = Distributor::find($distributor_id)
                                    ->items()
                                    ->updateExistingPivot($item_id, [ 
                                        'total' => request('total') 
                                    ]);
    }

    /**
     * page form to change data on pivot table
     */
    public function edit_item($distributor_id, $item_id)
    {
        $item = Distributor::find($distributor_id)
                            ->items()
                            ->where('item_id', $item_id)
                            ->first();

        return view('distributors.items.edit', compact('item', 'distributor_id'));
    }
}
