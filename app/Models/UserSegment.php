<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSegment extends Model
{
    protected $fillable = [
        'datetime',
        'name',
        'description',
        'query',
        'comments',
    
    ];
    
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/user-segments/'.$this->getKey());
    }
}
