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

    public function get_quantityorder($product_id){
        $products= Product::find($product_id);
        $quantityorder=0;
        foreach( $products->order_details as $value){
            $quantityorder+=$value->quantity;
        }
        return "Số lượng đã bán:".$quantityorder;
    }
    
    public function get_order(){
        $orders= Order::all();
        return $orders;
    }

    public function get_sumoforder(){
        $orders= Order::all();
        $sum_order=0;
        foreach($orders as $value){
            $sum_order+=1;
        }
        return "Số lượng đơn hàng:".$sum_order;
    }

    public function get_order_details($order_id){
        $orders= Order::find($order_id);
        return $orders->order_details;
    }

    public function get_recvbill(){
        $impbills= Impbill::all();
        return $impbills;
    }

    public function get_recvbillbydate($date){
        $impbills= Impbill::whereDate('created_at',$date)->get();
        return $impbills;
    }

    public function get_expbill(){
        $expbills= Expbill::all();
        return $expbills;
    }

    public function get_expbillbydate($date){
        $expbills= Expbill::whereDate('created_at',$date)->get();
        return $expbills;
    }

    public function get_namebyimpbill(){
        $impbills= Impbill::all();
        foreach( $impbills->admins as $value){
            return $value->admin_name;
        }
    }

}