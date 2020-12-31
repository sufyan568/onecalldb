<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SystemProperty extends Model
{
    protected $fillable = [
        'tag',
        'value',
        'description',
    
    ];
    
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/system-properties/'.$this->getKey());
    }
}
