<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MessageFile extends Model
{
    protected $fillable = [
        'message_id',
        'file',
        'meta',
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
        return url('/admin/message-files/'.$this->getKey());
    }
}
