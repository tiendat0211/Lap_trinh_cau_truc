<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    
    public function quantity() {
        return $this->hasMany('App\Models\Quantity','product_id','id');
    }

    public function order_details() {
        return $this->hasMany('App\Models\Order_details','product_id','id');
    }

    public function importbills() {
        return $this->hasMany('App\Models\Impbill','product_id','id');
    }

    public function exportbills() {
        return $this->hasMany('App\Models\Expbill','product_id','id');
    }
}
