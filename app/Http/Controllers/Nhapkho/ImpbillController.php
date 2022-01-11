<?php

namespace App\Http\Controllers\Nhapkho;

use Illuminate\Http\Request;
use App\Models\Impbill;
use App\Models\Product;
use App\Models\Admin;
use App\Http\Controllers\Controller;

class ImpbillController extends Controller
{

    public function savebill(Request $request){
        // nhan het du lieu co trong form
        //return $request->all();
        $products=Product::find($request->product_id);

        if($products == null ){
            return redirect('Error')->with('error','Không tìm thấy sản phẩm');
        }else{
            $news = new Impbill;
            $news->product_id = $request->product_id;
            $news->quantity = $request->quantity;
            $news->color = $request->color;
            $news->admin_id = $request->admin_id;
            $news->description = $request->description;
            $news->save();
            $admins = Admin::find($request->admin_id);
            $action = "nhập";
            return view('Thongbao',['new' => $news,'products'=>$products,'admins'=>$admins,'action'=>$action]);
        }
       
    }

}