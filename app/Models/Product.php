<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function Category()
    {
        return $this->belongsTo('App\Models\Category','id_category', 'id_category');
    }
}
