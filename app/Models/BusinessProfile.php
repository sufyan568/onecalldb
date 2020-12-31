<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessProfile extends Model
{
    protected $table = 'business_profile';

    protected $fillable = [
        'user_id',
        'datetime',
        'name',
        'phone',
        'address',
        'latlng',
        'discription',
        'products_services',
        'keywords',
        'comments',
        'published_id',
        'currency',
        'status',
    
    ];
    
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/business-profiles/'.$this->getKey());
    }
}
