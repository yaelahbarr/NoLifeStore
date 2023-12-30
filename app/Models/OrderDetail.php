<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $guarded=['id_order_detail'];
    protected $primaryKey = 'id_order_detail';
    public function Product()
    {
        return $this->belongsTo('App\Models\Product', 'id_product', 'id_product');
    }
}
