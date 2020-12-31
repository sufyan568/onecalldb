<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DefaultGroceryDataset extends Model
{
    protected $table = 'default_grocery_dataset';

    protected $fillable = [
        'product_id',
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
        return url('/admin/default-grocery-datasets/'.$this->getKey());
    }
}
