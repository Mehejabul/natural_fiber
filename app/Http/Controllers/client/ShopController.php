<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = Product::where('status', 'Active')->orderBy('created_at', 'desc')->paginate(10);
        $catalogs = DB::table('catalogs')->get();
        return view('client.shop', compact('products', 'catalogs'));
    }

    public function showByCatalog($slug)
    {
        // Convert the "slug-like" representation back to the id
        $id = (int) str_replace('catalog-', '', $slug);

        $catalog = DB::table('catalogs')->find($id);
        if (!$catalog) {
            abort(404);
        }

        $products = Product::where('catalogue_id', $id)
            ->where('status', 'Active')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $catalogs = DB::table('catalogs')->get();

        return view('client.shop', compact('products', 'catalogs', 'catalog'));
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
