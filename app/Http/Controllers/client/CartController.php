<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;
use App\Models\Product;
use App\Models\ProductVariationDetails;


class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::instance('cart')->content();
        //dd($cartItems);
        //return view('client.cart')->with(compact('cartItems'));
        return view('client.cart',['cartItems'=>$cartItems]);
    }
    public function addToCart(Request $request)
    {
        //dd($request->all());
        $product = Product::find($request->id);
        $price = $product->mrp;
        $size = ProductVariationDetails::with('productvariation')->where('id',$request->size)->where('product_id',$request->id)->get()->first();
        //dd($size);
        Cart::instance('cart')->add($product->id,$product->title,$request->quantity,$price,['size'=>$size->productvariation->size,'variation_id'=>$request->size])->associate('App\Models\Product');
        //dd(Cart::instance('cart'));
        return redirect()->back()->with('message','Success! Item has been added successfully!');
    }
    public function updateCart(Request $request)
    {
        //dd($request->all());
        Cart::instance('cart')->update($request->rowId,$request->quantity);
        return redirect()->route('cart.index');
    }
    public function removeItem(Request $request)
    {
        $rowId = $request->rowId;
        Cart::instance('cart')->remove($rowId);
        return redirect()->route('cart.index');
    }
    public function clearCart()
    {
        Cart::instance('cart')->destroy();
        return redirect()->route('cart.index');
    }
}
