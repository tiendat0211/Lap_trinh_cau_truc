<?php

namespace App\Http\Controllers\Xuatkho;

use Illuminate\Http\Request;
use App\Models\Expbill;
use App\Models\Product;
use App\Models\Admin;
use App\Http\Controllers\Controller;

/**
 * @OA\Get(
 *     path="/projects",
 *     @OA\Response(response="200", description="Display a listing of projects.")
 * )
 */

class ExpbillController extends Controller
{

    public function savebill(Request $request){
        // nhan het du lieu co trong form
        //return $request->all();

        $products=Product::find($request->product_id);
        $admins = Admin::find($request->admin_id);
        if($products == Null || $admins == Null){
            return redirect('Error')->with('error','Validate input error');
        }else{

            foreach($products->quantity as $value){
                if($value->color = $request->color){
                    $quantity = ($value->quantity);
                }
            }
           
            if($quantity < $request->quantity){
                return redirect('Error')->with('error','Sản phẩm này không đủ số lượng');
            }else{
                $news = new Expbill;
                $news->product_id = $request->product_id;
                $news->quantity = $request->quantity;
                $news->color = $request->color;
                $news->admin_id = $request->admin_id;
                $news->description = $request->description;
                $news->save();
                $admins = Admin::find($request->admin_id);
                $action = "xuất";
                return view('Thongbao',['new' => $news,'products'=>$products,'admins'=>$admins,'action'=>$action]);
            }

        }
    }
}