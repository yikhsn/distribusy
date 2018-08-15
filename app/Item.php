<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'code', 'name', 'stock', 
        'price', 'description', 'weight',
        'dimention', 'material'
    ];

    public function distributors()
    {
        return $this->belongsToMany(Distributor::class)
                    ->withTimestamps()
                    ->withPivot('total');
    }
}
