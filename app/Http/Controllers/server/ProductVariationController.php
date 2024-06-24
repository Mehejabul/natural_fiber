<?php

namespace App\Http\Controllers\server;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductVariationDetails;
use App\Models\ProductVariation;
class ProductVariationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::with('stock')->get()->all();
        $sizes = ProductVariation::get()->all();
        return view('server.product-variation.create')->with(compact('products','sizes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $total_qty = 0;
        $mainProduct = Product::with('stock')->where('code',$request->product_id)->get()->first();
        if($mainProduct)
        {
            //dd($mainProduct->stock->quantity);
            foreach($request['group-product'] as $products)
            {
                $total_qty += $products['qnt'];
            }
            if($mainProduct->stock->quantity >= $total_qty)
            {
                foreach($request['group-product'] as $product)
                {
                    if($product['product_variations_id'] != null){
                        $variation = new ProductVariationDetails();
                        $variation->product_id = $mainProduct->id;
                        $variation->product_variations_id = $product['product_variations_id'];
                        // $invoice_details->sku = $product['sku'];
                        $variation->quantity = $product['qnt'];
                        // $invoice_details->price = $product['price'];
                        $variation->save();
                    }
                }
                return redirect()->back()->with('success','Product Variation Create Successfully');
            }
            else{
                return redirect()->back()->with('error','Product Variant Quantity Should be Less than or Equal Stock');
            }

        }
        else
        {
            return redirect()->back()->with('error','Product Code Invalid');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
