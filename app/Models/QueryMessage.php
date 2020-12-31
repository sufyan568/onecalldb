<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QueryMessage extends Model
{
    protected $fillable = [
        'query_id',
        'type',
        'content',
        'meta',
    
    ];
    
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/query-messages/'.$this->getKey());
    }
}
