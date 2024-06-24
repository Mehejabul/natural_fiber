<?php

namespace App\Http\Controllers\server;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\ProductType;
use Image;
class ProductTypeController extends Controller
{
    public function index()
    {
        $banners = ProductType::get()->all();
        return view('server.product-type.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('server.product-type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $banner = new ProductType();
        // $banner->first_text = $request->first_text;
        $banner->title = $request->title;

        //dd($request->file('brand_image'));
        //dd($request->hasFile('brand_image'));
        if($request->hasFile('image')){
            $image_temp = $request->file('image');
            if($image_temp->isValid()){
                //Get Image Extension
                $extension = $image_temp->getClientOriginalExtension();
                //Generate New Image Name
                $imageName = time().'.'.$extension;
//                $imagePath = 'images/Product_Type/'.$imageName;
//                Image::make($image_temp)->resize(1040,1300)->save($imagePath);
                $imagePath = 'images/product_type';
                $image_temp->move(public_path($imagePath),$imageName);
                $banner->image = $imageName;
            }
        }


        $banner->save();
        return redirect(route('product-type.index'))->with('success','New Product Type Save Successfully!');
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
        $banner = ProductType::where('id',$id)->get()->first();
        return view('server.product-type.edit')->with(compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $banner = ProductType::findorFail($id);
        // $banner->first_text = $request->first_text;
        $banner->title = $request->title;

        if($request->hasFile('image')){
            $exists = 'images/product_type/'.$banner->image;
            if(File::exists($exists))
            {
                File::delete($exists);
            }
            $image_temp = $request->file('image');
            if($image_temp->isValid()){
                //Get Image Extension
                $extension = $image_temp->getClientOriginalExtension();
                //Generate New Image Name
                $imageName = time().'.'.$extension;
//                $imagePath = 'images/product_type/'.$imageName;
//                Image::make($image_temp)->resize(1040,1300)->save($imagePath);
                $imagePath = 'images/product_type';
                $image_temp->move(public_path($imagePath),$imageName);
                $banner->image = $imageName;
            }
        }

        $banner->update();

        return redirect(route('product-type.index'))->with('success','Product Type Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner = ProductType::findorFail($id);
        $exists = 'images/product_type/'.$banner->image;
        if(File::exists($exists))
        {
            File::delete($exists);
        }
        $banner->delete();
        $message  = "Product Type Delete Successfully Done";
        return redirect(route('product-type.index'))->with("success",$message);
    }
    public function updateProductTypeStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            // echo "<pre>"; print_r($data);die;
            if ($data['status']== 'Active') {
                $status = 'Inactive';
            }
            else{
                $status = 'Active';
            }
            ProductType::where('id',$data['product_type'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'product_type'=> $data['product_type']]);
        }
    }
}
