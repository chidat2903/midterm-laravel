<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    public function getTrangchu()
    {
        $products = Product::orderBy("id", "DESC")->get();
        return view("pages.trangchu",compact('products') );
    }
}
