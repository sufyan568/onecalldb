<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DefaultGrocery extends Model
{
    protected $table = 'default_grocery';

    protected $fillable = [
        'categroy',
        'product_name',
        'weight_packing',
        'description',
        'price',
        'currency',
        'images',
        'meta',
        'status',
    
    ];
    
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/default-groceries/'.$this->getKey());
    }
}
