<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_city';
    protected $guarded=[];
    public function Province()
    {
        return $this->belongsTo('App\Province','id_province');
    }
}
