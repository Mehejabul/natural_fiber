<?php

namespace App\Http\Controllers\server;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::get()->all();
        return view('server.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('server.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $abouts = new About();

        $abouts->short_description = $request->short_description;
        $abouts->description = $request->details_description;

        if ($request->hasFile('image')) {
            $image_temp = $request->file('image');
            if ($image_temp->isValid()) {
                //Get Image Extension
                $extension = $image_temp->getClientOriginalExtension();
                //Generate New Image Name
                $imageName = time() . '.' . $extension;
                $imagePath = 'images/about';
                $image_temp->move(public_path($imagePath), $imageName);
                $abouts->image = $imageName;
            }
        }
        $abouts->save();
        return redirect(route('abouts.index'))->with('success', 'About Save Successfully!');
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
        $about  = About::where('id', $id)->get()->first();
        return view('server.about.edit')->with(compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $abouts = About::findorFail($id);

        $abouts->short_description = $request->short_description;
        $abouts->description = $request->details_description;

        if ($request->hasFile('image')) {
            $image_temp = $request->file('image');
            if ($image_temp->isValid()) {
                //Get Image Extension
                $extension = $image_temp->getClientOriginalExtension();
                //Generate New Image Name
                $imageName = time() . '.' . $extension;
                $imagePath = 'images/about';
                $image_temp->move(public_path($imagePath), $imageName);
                $abouts->image = $imageName;
            }
        }
        $abouts->update();
        return redirect(route('abouts.index'))->with('success', 'About Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $abouts = About::findorFail($id);
        $abouts->delete();
        $message  = "About Delete Successfully Done";
        return redirect(route('abouts.index'))->with("success", $message);
    }
}
