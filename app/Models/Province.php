<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_province';
    protected $guarded=[];
    public function City()
    {
        return $this->hasMany('App\City','id_province');
    }
}
