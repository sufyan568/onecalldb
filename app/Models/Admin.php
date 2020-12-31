<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';

    protected $fillable = [
        'datetime',
        'user_id',
        'email',
        'password',
        'discription',
        'comments',
        'type',
        'status',
    
    ];
    
    protected $hidden = [
        'password',
    
    ];
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/admins/'.$this->getKey());
    }
}
