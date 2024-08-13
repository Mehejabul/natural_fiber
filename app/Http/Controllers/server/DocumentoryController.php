<?php

namespace App\Http\Controllers\server;

use App\Http\Controllers\Controller;
use App\Models\Documentory;
use Illuminate\Http\Request;

class DocumentoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documentories = Documentory::get()->all();
        return view('server.documentory.index', compact('documentories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('server.documentory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $documentories = new Documentory();

        $documentories['company_documentory'] = $request->company_documentory;
        $documentories['url'] = $request->video;

        if ($request->hasFile('image')) {
            $image_temp = $request->file('image');
            if ($image_temp->isValid()) {
                //Get Image Extension
                $extension = $image_temp->getClientOriginalExtension();
                //Generate New Image Name
                $imageName = time() . '.' . $extension;
                $imagePath = 'images/documentory';
                $image_temp->move(public_path($imagePath), $imageName);
                $documentories->image = $imageName;
            }
        }
        $documentories->save();
        return redirect(route('documentory.index'))->with('success', 'Documentory Save Successfully!');
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
        $documentory  = Documentory::where('id', $id)->get()->first();
        return view('server.documentory.edit')->with(compact('documentory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $documentories = Documentory::findorFail($id);
        
        $documentories['company_documentory'] = $request->company_documentory;
        $documentories['url'] = $request->video;
        

        if ($request->hasFile('image')) {
            $image_temp = $request->file('image');
            if ($image_temp->isValid()) {
                //Get Image Extension
                $extension = $image_temp->getClientOriginalExtension();
                //Generate New Image Name
                $imageName = time() . '.' . $extension;
                $imagePath = 'images/documentory';
                $image_temp->move(public_path($imagePath), $imageName);
                $documentories->image = $imageName;
            }
        }
        $documentories->update();
        return redirect(route('documentory.index'))->with('success', 'Documentory Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $documentories = Documentory::findorFail($id);
        $documentories->delete();
        $message  = "Documentory Delete Successfully Done";
        return redirect(route('documentory.index'))->with("success", $message);
    }
}
