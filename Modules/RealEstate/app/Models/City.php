<?php

namespace Modules\RealEstate\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// use Modules\RealEstate\Database\Factories\CityFactory;

class City extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['city_name'];

    // protected static function newFactory(): CityFactory
    // {
    //     // return CityFactory::new();
    // }
}
