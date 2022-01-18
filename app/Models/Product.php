<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    
    public function warehouses() {
        return $this->hasMany('App\Models\Expbill','product_id','id');
    }
}
