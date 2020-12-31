<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BroadcastMessage extends Model
{
    protected $fillable = [
        'datetime',
        'mobile_number',
        'message',
        'channel',
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
        return url('/admin/broadcast-messages/'.$this->getKey());
    }
}
