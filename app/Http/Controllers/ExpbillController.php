<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expbill;

class ExpbillController extends Controller
{
    public function getForm(){
        return view('expbill');
    }
    
    public function savebill(Request $request){
        // nhan het du lieu co trong form
        //return $request->all();

        $news = new Expbill;
        $news->id = $request->id;
        $news->product_id = $request->product_id;
        $news->quantity = $request->quantity;
        $news->color = $request->color;
        
        $news->save();
        return $news;
       
    }

}