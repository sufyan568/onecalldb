<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserMessge extends Model
{
    protected $fillable = [
        'datetime',
        'to',
        'from',
        'message',
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
        return url('/admin/user-messges/'.$this->getKey());
    }
}
