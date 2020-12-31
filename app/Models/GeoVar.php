<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeoVar extends Model
{
    protected $fillable = [
        'datetime',
        'comments',
        'name',
        'description',
        'lat1',
        'lng1',
        'lat2',
        'lng2',
        'tpl_var',
        'tpl_val',
    
    ];
    
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/geo-vars/'.$this->getKey());
    }
}
