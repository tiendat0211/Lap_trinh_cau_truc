<?php

namespace App\Http\Controllers\Nhapkho;

use Illuminate\Http\Request;
use App\Models\Impbill;
use App\Models\Product;
use App\Models\Admin;
use App\Models\Warehouse;
use App\Http\Controllers\Controller;

class ImpbillController extends Controller
{

    public function savebill(Request $request){
        // nhan het du lieu co trong form
        //return $request->all();
        $products=Product::find($request->product_id);
        $admins=Admin::find($request->admin_id);
        $warehouses=Warehouse::find($request->warehouse_id);

        if($products == null || $admins == null || $warehouses == null){
            return redirect('Error')->with('error','Validate input error');
        }else{
            $news = new Impbill;
            $news->product_id = $request->product_id;
            $news->admin_id = $request->admin_id;
            $news->quantity = $request->quantity;
            $news->warehouse_id = $request->warehouse_id;
            $news->description = $request->description;
            $news->save();
            $admins = Admin::find($request->admin_id);
            $action = "nhập";
            return view('Thongbao',['new' => $news,'action'=>$action]);
        }
       
    }

}