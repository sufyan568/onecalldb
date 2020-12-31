<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marker extends Model
{
    protected $fillable = [
        'place_id',
        'name',
        'tel_country_code',
        'phone',
        'address',
        'city',
        'region',
        'country',
        'lat',
        'lng',
        'timezone',
        'photo_urls',
    
    ];
    
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/markers/'.$this->getKey());
    }
}
