<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    protected $fillable = [
        'name',
        'id_distributor',
        'address',
        'telephone'
    ];

    public function items()
    {
        return $this->belongsToMany(Item::class)->withTimestamps()->withPivot('total');
    }
}
