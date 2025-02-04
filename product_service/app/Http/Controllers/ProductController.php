<?php

namespace App\Http\Controllers;

use App\Jobs\ProductCreated;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
        $product=Product::create($request);
        ProductCreated::dispatch([
            'id' => $product->id
        ]);
        return response('product created');

    }
}
