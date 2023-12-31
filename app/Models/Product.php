<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_product';
    public function Category()
    {
        return $this->belongsTo('App\Models\Category','id_category', 'id_category');
    }
    public function Item()
    {
        return $this->hasMany('App\Models\OrderDetail', 'id_product', 'id_product');
    }
}
