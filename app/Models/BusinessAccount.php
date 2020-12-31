<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessAccount extends Model
{
    protected $table = 'business_account';

    protected $fillable = [
        'datetime',
        'business_id',
        'debit',
        'credit',
        'balance',
        'currency',
        'discription',
        'type',
        'status',
    
    ];
    
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/business-accounts/'.$this->getKey());
    }
}
