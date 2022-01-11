<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Order_details;
use App\Models\Expbill;
use App\Models\Impbill;

class KhohangController extends Controller
{
    public function get_product(){
        $products= Product::all();
        return $products;
        //return DB::select("SELECT * from products")
    }

    public function get_productbyid($product_id){
        $products= Product::find($product_id);
        return $products;
        //return DB::select("SELECT * from products")
    }

    public function get_sumofquantity($product_id){
        $products= Product::find($product_id);
        $quantity=0;
        foreach( $products->quantity as $value){
            $quantity+=$value->quantity;
        }
        return "Số lượng sản phẩm ".$product_id. " còn trong kho: ".$quantity;
    }

}