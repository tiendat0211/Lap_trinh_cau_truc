<?php

namespace App\Http\Controllers\Thongke;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Order;
use App\Models\Order_details;
use App\Models\Impbill;
use App\Models\Expbill;
use App\Models\Admin;
use App\Http\Controllers\Controller;

class ThongkeXuatkhoController extends Controller
{

    public function ketqua(Request $request){
        //nhan het du lieu co trong form
        //return $request->all();
        $admin = null;
        $product = null;
        $date = null;

        if($request->check == ''){
            return "Invalid input";
        }
        if($request->check == 1){
            $date = $request->ngay;
            $expbills=get_expbillbydate($date);
            return view('ketquaxuatkho',['impbills'=>$expbills,'date'=>$date,'admin'=>$admin,'product'=>$product]);
        }
        else if($request->check == 2){
            $product = Product::find($request->product_id);
            $expbills=get_expbillbyproduct($request->product_id);
            return view('ketquaxuatkho',['impbills'=>$expbills,'date'=>$date,'admin'=>$admin,'product'=>$product]);
        }
        else if($request->check == 3){
            $admin = Admin::find($request->admin_id);
            $expbills=get_expbillbyadmin($request->admin_id);
            return view('ketquaxuatkho',['impbills'=>$expbills,'date'=>$date,'admin'=>$admin,'product'=>$product]);
        }

     }
    
    public function get_expbill(){
        $expbills= Expbill::all();
        return $expbills;
    }

    public function get_expbillbydate($date){
        $expbills= Expbill::whereDate('created_at',$date)->get();
        return $expbills;
    }

    public function get_expbillbyproduct($product_id){
        $expbills=Expbill::where('product_id',$product_id)->get();
        return $expbills;
    }

    public function get_expbillbyadmin($admin_id){
        $expbills=Expbill::where('admin_id',$admin_id)->get();
        return $expbills;
    }

}