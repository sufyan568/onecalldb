<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApiGateway extends Model
{
    protected $table = 'api_gateway';

    protected $fillable = [
        'name',
        'description',
        'key',
        'path',
        'status',
    
    ];
    
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/api-gateways/'.$this->getKey());
    }
}
