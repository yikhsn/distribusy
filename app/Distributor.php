<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    protected $fillable = [
        'name', 'owner',
        'province', 'city',
        'address', 'address_2',
        'email', 'telephone', 'account',
        'distance', 'bill'
    ];

    public function items()
    {
        return $this->belongsToMany(Item::class)
                    ->withTimestamps()
                    ->withPivot('total');
    }
}