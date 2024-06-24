<?php

namespace App\Http\Controllers\server;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\ProductVariationDetails;
class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stocks = Stock::with('product')->get()->all();
        //dd($stocks);
        return view('server.stock.index')->with(compact('stocks'));
    }
    // public function stockAlert()
    // {

    // }
    public function editVariant(string $id)
    {
        $variant = ProductVariationDetails::with('product','productvariation')->findorFail($id);
        return view('server.stock.edit-details')->with(compact('variant'));
    }
    public function updateVariant(Request $request, string $id)
    {
       //dd($request->all());
       $sum = 0;
       $variant = ProductVariationDetails::with('product','productvariation')->findorFail($id);
       if ($variant->product->productvariation) {
        foreach ($variant->product->productvariation as $value) {
            if($value->id != $variant->id)
            {
                $sum += $value->quantity;
            }
        }
       }
    //dd($sum);
       if(($sum+$request->quantity) <= $variant->product->stock->quantity)
       {
          $variant->quantity = $request->quantity;
            $variant->update();
            $stock = Stock::findorFail($variant->product->stock->id);
            $stock->available_qty = $sum + $request->quantity;
            $stock->update();
            return redirect()->back()->with('success','Stock Update Successfully!!');
       }
       return redirect()->back()->with('error','Stock Capacity Overflow!!');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $stock = Stock::findorfail($id);
        $variants = ProductVariationDetails::with('product','productvariation')->where('product_id',$stock->product_id)->get()->all();
        return view('server.stock.details')->with(compact('variants'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stock = Stock::with('product')->findorFail($id);
        return view('server.stock.edit')->with(compact('stock'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $stock = Stock::findorFail($id);
        $stock->quantity = $request->quantity;
        $stock->available_qty = $request->available_qty;
        $stock->update();
        return redirect(route('stock.index'))->with('success','Stock Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
