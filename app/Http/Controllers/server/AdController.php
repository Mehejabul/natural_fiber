<?php

namespace App\Http\Controllers\server;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Ad;
use Image;
class AdController extends Controller
{
    public function index()
    {
        $ads = Ad::get()->all();
        return view('server.ad-zone.index',compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('server.ad-zone.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $rules = [
            'type' => 'required',
            'view_section' => 'required',
        ];
        $this->validate($request,$rules);
        $ad = new ad();
        $ad->type = $request->type;
        $ad->view_section = $request->view_section;

        if($request->hasFile('image')){
            $image_temp = $request->file('image');
            if($image_temp->isValid()){
                //Get Image Extension
                $extension = $image_temp->getClientOriginalExtension();
                //Generate New Image Name
                $imageName = time().'.'.$extension;
//                $imagePath = 'images/ad/'.$imageName;
//                if($request->type == 'long'){
//                    Image::make($image_temp)->resize(2880,650)->save($imagePath);
//                }
//                else {
//                    Image::make($image_temp)->resize(2880,436)->save($imagePath);
//                }

                $imagePath = 'images/ad/';
                $image_temp->move(public_path($imagePath),$imageName);

                $ad->image = $imageName;
            }
        }

        $ad->save();
        return redirect(route('ad.index'))->with('success','New Ad Save Successfully!');

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
        $ad = Ad::where('id',$id)->get()->first();
        return view('server.ad-zone.edit')->with(compact('ad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $rules = [
            'type' => 'required',
            'view_section' => 'required',
        ];
        $this->validate($request,$rules);
        $ad = Ad::findorFail($id);
        $ad->type = $request->type;
        $ad->view_section = $request->view_section;

        if($request->hasFile('image')){
            $exists = 'images/ad/'.$ad->image;
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
//                $imagePath = 'images/ad/'.$imageName;
//                if($request->type == 'long'){
//                    Image::make($image_temp)->resize(2880,650)->save($imagePath);
//                }
//                else {
//                    Image::make($image_temp)->resize(2880,436)->save($imagePath);
//                }
                $imagePath = 'images/ad/';
                $image_temp->move(public_path($imagePath),$imageName);
                $ad->image = $imageName;
            }
        }

        $ad->update();

        return redirect(route('ad.index'))->with('success','Ad Update Successfully!');


        $ad = Ad::findorFail($id);
        // $ad->first_text = $request->first_text;
        // $ad->second_text = $request->second_text;

        if($request->hasFile('image')){
            $exists = 'images/ad/'.$ad->image;
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
//                $imagePath = 'images/ad/'.$imageName;
//                Image::make($image_temp)->resize(2880,650)->save($imagePath);
                $imagePath = 'images/ad/';
                $image_temp->move(public_path($imagePath),$imageName);
                $ad->image = $imageName;
            }
        }

        $ad->update();

        return redirect(route('ad.index'))->with('success','Ad Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ad = Ad::findorFail($id);
        $exists = 'images/ad/'.$ad->image;
        if(File::exists($exists))
        {
            File::delete($exists);
        }
        $ad->delete();
        $message  = "Ad Delete Successfully Done";
        return redirect(route('ad.index'))->with("success",$message);
    }
    public function updateAdStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            // echo "<pre>"; print_r($data);die;
            if ($data['status']== 'Active') {
                $status = 'Inactive';
            }
            else{
                $status = 'Active';
            }
            Ad::where('id',$data['ad_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'ad_id'=> $data['ad_id']]);
        }
    }
}
