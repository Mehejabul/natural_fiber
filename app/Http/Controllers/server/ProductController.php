<?php

namespace App\Http\Controllers\server;

use App\Http\Controllers\Controller;
use App\Models\MultiImages;
use App\Models\ProductType;
use App\Models\ProductVariationDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Image;
use App\Models\Catalogue;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Unit;
use App\Models\Stock;
use App\Models\ViewSection;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('catalogue','category','brand','unit','viewSection')->get()->all();
        return view('server.product.index')->with(compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$categories = Category::where('status','Active')->get()->toArray();
        $categories = Catalogue::with('category')->get()->toArray();
        //dd($categories);
        $brands = Brand::where('status','Active')->get()->all();
        $units = Unit::get()->all();
        $product_types = ProductType::get()->all();
        $product_views = ViewSection::where('status','Active')->get()->all();
        return view('server.product.create')->with(compact('categories','brands','units','product_types','product_views'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $rules = [
            'title' => 'required',
            'category_id' =>'required',
            'brand_id' =>'required',
            'unit_id' =>'required',
            'code' =>'required',
//            'color' =>'required',
            'type' =>'required',
            'view_section' =>'required',
            'has_stock' =>'required',
            'cost' =>'required',
            'mrp' =>'required',
        ];
        $this->validate($request,$rules);
        $categoryDetails = Category::find($request->category_id);
        $product = new Product();


        $product->catalogue_id = $categoryDetails['catalogue_id'];
        $product->category_id = $request->category_id;
        $product->title = $request->title;
        $product->brand_id = $request->brand_id;
        $product->unit_id = $request->unit_id;
        $product->code = $request->code;
        $product->color = $request->color;
        $product->weight = $request->weight;
        $product->has_stock = $request->has_stock;
        // $product->discount_type = $request->discount_type;
        if($request->discount_amount)
        {
            $product->discount_amount = $request->discount_amount;
        }

        $product->cost = $request->cost;
        $product->mrp = $request->mrp;
        $product->alert_stock = $request->alert_stock;
        $product->tags = $request->tags;
        $product->type = $request->type;
        $product->view_section = $request->view_section;
        // $product->description = $request->description;
        $product->details_description = $request->details_description;

        if($request->hasFile('image')){
            $image_temp = $request->file('image');
            if($image_temp->isValid()){
                //Get Image Extension
                $extension = $image_temp->getClientOriginalExtension();
                //Generate New Image Name
                $imageName = time().'.'.$extension;
//                $imagePath = 'images/product_image/'.$imageName;
//                Image::make($image_temp)->resize(1040,1300)->save($imagePath);
                $imagePath = 'images/product_image';
                $image_temp->move(public_path($imagePath),$imageName);
                $product->image = $imageName;
            }
        }
        if($request->hasFile('size_guide')){
            $image_temp = $request->file('size_guide');
            if($image_temp->isValid()){
                //Get Image Extension
                $extension = $image_temp->getClientOriginalExtension();
                //Generate New Image Name
                $imageName = time().'.'.$extension;
//                $imagePath = 'images/product_sizeguide/'.$imageName;
//                Image::make($image_temp)->resize(2389,3117)->save($imagePath);
                $imagePath = 'images/product_sizeguide';
                $image_temp->move(public_path($imagePath),$imageName);
                $product->size_guide = $imageName;
            }
        }


        $product->save();
        $last = $product->id;

        if($request->hasFile("multiImage"))
        {
            $files = $request->file("multiImage");
            foreach ($files as $file) {
                $imageName = time().'_'.$file->getClientOriginalName();
                $productImg['product_id'] = $product->id;
                $productImg['image'] = $imageName;
                $imagePath = 'images/multiImage';
                $file->move(public_path($imagePath),$imageName);
                MultiImages::create($productImg);
            }
        }


        if($last)
        {
            $product_stock = new Stock();
            if($request->stock)
            {
                $product_stock->quantity = $request->stock;
                $product_stock->available_qty = $request->stock;
            }
            $product_stock->product_id = $last;
            $product_stock->alert_stock = $request->alert_stock;;
            $product_stock->save();
        }
        return redirect(route('product.index'))->with('success','Product Create Successfully!');
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
        $product = Product::findorFail($id);
        $categories = Catalogue::with('category')->get()->toArray();
        $brands = Brand::where('status','Active')->get()->all();
        $units = Unit::get()->all();
        $product_types = ProductType::get()->all();
        $product_views = ViewSection::get()->all();
        return view('server.product.edit')->with(compact('categories','brands','units','product','product_types','product_views'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'title' => 'required',
            'category_id' =>'required',
            'brand_id' =>'required',
            'unit_id' =>'required',
            'code' =>'required',
//            'color' =>'required',
            'type' =>'required',
            'view_section' =>'required',
            'has_stock' =>'required',
            'cost' =>'required',
            'mrp' =>'required',
        ];
        $this->validate($request,$rules);
        $categoryDetails = Category::find($request->category_id);
        $product = Product::findorFail($id);
        $product->catalogue_id = $categoryDetails['catalogue_id'];
        $product->category_id = $request->category_id;
        $product->title = $request->title;
        $product->brand_id = $request->brand_id;
        $product->unit_id = $request->unit_id;
        $product->code = $request->code;
        $product->color = $request->color;
        $product->weight = $request->weight;
        $product->has_stock = $request->has_stock;
        // $product->discount_type = $request->discount_type;
        if($request->discount_amount)
        {
            $product->discount_amount = $request->discount_amount;
        }

        $product->cost = $request->cost;
        $product->mrp = $request->mrp;
        $product->alert_stock = $request->alert_stock;
        $product->tags = $request->tags;
        $product->type = $request->type;
        $product->view_section = $request->view_section;
        // $product->description = $request->description;
        $product->details_description = $request->details_description;

        if($request->hasFile('image')){
            $image_temp = $request->file('image');
            if($image_temp->isValid()){
                //Get Image Extension
                $extension = $image_temp->getClientOriginalExtension();
                //Generate New Image Name
                $imageName = time().'.'.$extension;
//                $imagePath = 'images/product_image/'.$imageName;
//                Image::make($image_temp)->resize(1040,1300)->save($imagePath);
                $imagePath = 'images/product_image';
                $image_temp->move(public_path($imagePath),$imageName);
                $product->image = $imageName;
            }
        }
        if($request->hasFile('size_guide')){
            $image_temp = $request->file('size_guide');
            if($image_temp->isValid()){
                //Get Image Extension
                $extension = $image_temp->getClientOriginalExtension();
                //Generate New Image Name
                $imageName = time().'.'.$extension;
//                $imagePath = 'images/product_sizeguide/'.$imageName;
//                Image::make($image_temp)->resize(2389,3117)->save($imagePath);
                $imagePath = 'images/product_sizeguide';
                $image_temp->move(public_path($imagePath),$imageName);
                $product->size_guide = $imageName;
            }
        }
        $product->update();

        if($request->hasFile("multiImage"))
        {
            $files = $request->file("multiImage");
            foreach ($files as $file) {
                $imageName = time().'_'.$file->getClientOriginalName();
                $productImg['product_id'] = $product->id;
                $productImg['image'] = $imageName;
                $imagePath = 'images/multiImage';
                $file->move(public_path($imagePath),$imageName);
                MultiImages::create($productImg);
            }
        }
        return redirect(route('product.index'))->with('success','Product Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findorFail($id);
        $image_exists = 'images/product_image/'.$product->image;
        $size_guideexists = 'images/product_sizeguide/'.$product->size_guide;
        // $multiImage =
        if(File::exists($image_exists))
        {
            File::delete($image_exists);
        }
        if(File::exists($size_guideexists))
        {
            File::delete($size_guideexists);
        }
        $images = MultiImages::where('product_id',$product->id)->get();
        foreach ($images as $image) {
            $multi_exists = 'images/multiImage/'.$image->image;
            if(File::exists($multi_exists))
            {
                File::delete($multi_exists);
            }
            $image->delete();
        }
        $product->delete();
        Stock::where('product_id',$id)->delete();
        $variations = ProductVariationDetails::where('product_id',$id)->get()->all();
        foreach ($variations as $variation) {
            $variation->delete();
        }
        return redirect(route('product.index'))->with('success','Product Delete Successfully!');
    }

    public function updateProductStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            // echo "<pre>"; print_r($data);die;
            if ($data['status']== 'Active') {
                $status = 'Inactive';
            }
            else{
                $status = 'Active';
            }
            Product::where('id',$data['product_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'product_id'=> $data['product_id']]);
        }
    }

    public function multiImageDelete($id)
    {
//        $images = MultiImages::findorFail($id)->first();
//        $multi_exists = 'images/multiImage/'.$images->image;
//        if(File::exists($multi_exists))
//        {
//            File::delete($multi_exists);
//        }
//        $images->delete();
//
        $checkProductImage = MultiImages::findOrFail($id);

//        dd($checkProductImage);
        if (!is_null($checkProductImage)) {
            $checkProductImage->delete();
        }
        return redirect()->back()->with('success','Image Delete Successfully!!');
    }

}
