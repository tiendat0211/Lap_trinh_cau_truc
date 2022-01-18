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

class ThongkeNhapkhoController extends Controller
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
            $impbills = get_recvbillbydate($date);
            return view('ketquaxuatkho',['impbills'=>$impbills,'date'=>$date,'admin'=>$admin,'product'=>$product]);
        }
        else if($request->check == 2){
            $product = Product::find($request->product_id);
            $impbills= get_recvbillbyproduct($request->product_id);
            return view('ketquaxuatkho',['impbills'=>$impbills,'date'=>$date,'admin'=>$admin,'product'=>$product]);
        }
        else if($request->check == 3){
            $admin = Admin::find($request->admin_id);
            $impbills=get_recvbillbyadmin($request->admin_id);
            return view('ketquaxuatkho',['impbills'=>$impbills,'date'=>$date,'admin'=>$admin,'product'=>$product]);
        }

     }

    public function get_recvbill(){
        $impbills= Impbill::all();
        return $impbills;
    }

    public function get_recvbillbydate($date){
        $impbills= Impbill::whereDate('created_at',$date)->get();
        return $impbills;
    }

    public function get_recvbillbyproduct($product_id){
        $impbills=Impbill::where('product_id',$product_id)->get();
        return $impbills;
    }

    public function get_recvbillbyadmin($admin_id){
        $impbills=Impbill::where('admin_id',$admin_id)->get();
        return $impbills;
    }

}