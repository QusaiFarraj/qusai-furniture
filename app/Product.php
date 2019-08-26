<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable=[
        'name',
        'slug',
        'active',
        'display_name',
        'description',
        'dimensions',
        'care',
        'price',
        'discount',
        'sku',
        'finance_available',
        'finance_terms',
        'warranty',
        'returnable',
        'delivery_included',
    ];

    protected $casts=[
        'finance_available'=> 'boolean',
        'warranty'=> 'boolean',
        'returnable'=> 'boolean',
        'delivery_included'=> 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function options()
    {
        return $this->hasMany('App\Option');
    }
}
