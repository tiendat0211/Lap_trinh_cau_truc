<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expbill extends Model
{
    use HasFactory;
    protected $table = 'exportbills';

    public function admins() {
        return $this->hasOne('App\Models\Admin','id','admin_id');
    }

    public function products() {
        return $this->hasOne('App\Models\Product','id','product_id');
    }

    public function froms() {
        return $this->hasOne('App\Models\Warehouse','id','from');
    }

    public function tos() {
        return $this->hasOne('App\Models\Warehouse','id','to');
    }
}
