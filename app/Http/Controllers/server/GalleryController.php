<?php

namespace App\Http\Controllers\server;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::get()->all();
        return view('server.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('server.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $galleries = new Gallery();

        $galleries->title = $request->title;
        $galleries->name = $request->name;

        if ($request->hasFile('image')) {
            $image_temp = $request->file('image');
            if ($image_temp->isValid()) {
                //Get Image Extension
                $extension = $image_temp->getClientOriginalExtension();
                //Generate New Image Name
                $imageName = time() . '.' . $extension;
                $imagePath = 'images/gallery';
                $image_temp->move(public_path($imagePath), $imageName);
                $galleries->image = $imageName;
            }
        }
        $galleries->save();
        return redirect(route('gallery.index'))->with('success', 'Gallery Save Successfully!');
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
        $gallery  = Gallery::where('id', $id)->get()->first();
        return view('server.gallery.edit')->with(compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $galleries = Gallery::findorFail($id);

        $galleries->title = $request->title;
        $galleries->name = $request->name;

        if ($request->hasFile('image')) {
            $image_temp = $request->file('image');
            if ($image_temp->isValid()) {
                //Get Image Extension
                $extension = $image_temp->getClientOriginalExtension();
                //Generate New Image Name
                $imageName = time() . '.' . $extension;
                $imagePath = 'images/gallery';
                $image_temp->move(public_path($imagePath), $imageName);
                $galleries->image = $imageName;
            }
        }
        $galleries->update();
        return redirect(route('gallery.index'))->with('success', 'Gallery Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galleries = Gallery::findorFail($id);
        $galleries->delete();
        $message  = "Gallery Delete Successfully Done";
        return redirect(route('gallery.index'))->with("success", $message);
    }
}
