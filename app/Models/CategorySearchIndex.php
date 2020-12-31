<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategorySearchIndex extends Model
{
    protected $table = 'category_search_index';

    protected $fillable = [
        'last_updated',
        'category',
        'keywords',
        'meta',
    
    ];
    
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/category-search-indices/'.$this->getKey());
    }
}
