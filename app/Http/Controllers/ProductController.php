<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 14/02/2019
 * Time: 16:12
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function calculator(Request $request)
    {
        $des = $request->description;
        $price = $request->price;
        $percent = $request->percent;
        $discount = $price * $percent * 0.01;
        $newPrice = $price - $discount;
        return view('display',compact('des','price','percent','newPrice'));
    }
}