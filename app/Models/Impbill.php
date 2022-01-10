<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impbill extends Model
{
    use HasFactory;
    protected $table = 'importbills';

    public function admins() {
        return $this->hasOne('App\Models\Admin','id','admin_id');
    }

    public function products() {
        return $this->hasOne('App\Models\Product','id','product_id');
    }
    
}
