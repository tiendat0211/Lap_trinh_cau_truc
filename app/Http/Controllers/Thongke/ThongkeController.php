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

class ThongkeController extends Controller
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
            $expbills=Expbill::whereDate('created_at',$request->ngay)->get();
            return view('ketquaxuatkho',['impbills'=>$expbills,'date'=>$date,'admin'=>$admin,'product'=>$product]);
        }
        else if($request->check == 2){
            $product = Product::find($request->product_id);
            $expbills=Expbill::where('product_id',$request->product_id)->get();
            return view('ketquaxuatkho',['impbills'=>$expbills,'date'=>$date,'admin'=>$admin,'product'=>$product]);
        }
        else if($request->check == 3){
            $admin = Admin::find($request->admin_id);
            $expbills=Expbill::where('admin_id',$request->admin_id)->get();
            return view('ketquaxuatkho',['impbills'=>$expbills,'date'=>$date,'admin'=>$admin,'product'=>$product]);
        }

     }
    
}