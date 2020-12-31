<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessOrder extends Model
{
    protected $fillable = [
        'datetime',
        'buisness_id',
        'buisness_account_id',
        'from_username',
        'category',
        'query_id',
        'delivery_id',
        'comments',
        'status',
    
    ];
    
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/business-orders/'.$this->getKey());
    }
}
