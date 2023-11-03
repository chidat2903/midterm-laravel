<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function chitiet($id) {
        $product = Product::find($id); // Tìm sản phẩm dựa trên ID
    
        return view("pages.chitiet",compact('product'));
    }

    public function timkiem(Request $request) {
        $query = $request->input('query'); // Lấy từ khóa tìm kiếm từ input
        $products = Product::where('name', 'like', '%' . $query . '%')->get();
    
        return view("pages.timkiem", compact('query','products'));
    }
}
