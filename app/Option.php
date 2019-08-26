<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Option extends Model
{
    use SoftDeletes;

    protected $fillable=[
        'name',
        'slug',
        'description',
        'display_name',
        'kid_pet_friendly',
    ];

    protected $casts=[
        'kid_pet_friendly'  =>  'boolean',
    ];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function values()
    {
        $this->hasMany('App\OptionValue');
    }
}
