<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OptionValue extends Model
{
    use SoftDeletes;

    protected $fillable=[
        'type',
        'price',
        'discount',
        'sku',
        'color',
        'default',
        'active',
    ];

    protected $casts=[
        'default'   =>  'boolean',
        'active'   =>  'boolean',
    ];

    public function option()
    {
        return $this->belongsTo('App\Option');
    }

}
