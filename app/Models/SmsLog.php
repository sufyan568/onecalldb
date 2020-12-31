<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SmsLog extends Model
{
    protected $table = 'sms_log';

    protected $fillable = [
        'datetime',
        'tag',
        'to',
        'message',
        'api_request',
        'api_response',
        'status',
    
    ];
    
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/sms-logs/'.$this->getKey());
    }
}
