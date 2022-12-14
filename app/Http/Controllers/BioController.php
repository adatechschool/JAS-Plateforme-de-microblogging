<?php

namespace App\Http\Controllers;

use App\Models\Bio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Bio $bio)
    {
        $bio = Bio::latest()->first();
        

        return view('bio.index',compact('bio'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'bio_text' => 'required|string',
            'bio_img_ref' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $imageName = time().'.'.$request->bio_img_ref->extension();
        $request->bio_img_ref->move(public_path('images_bio'), $imageName);
        $validated['bio_img_ref']=$imageName;
        $request->user()->bio()->create($validated);
        
        return redirect(route('bio.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bio  $bio
     * @return \Illuminate\Http\Response
     */
    public function show(Bio $bio)
    {
      
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bio  $bio
     * @return \Illuminate\Http\Response
     */
    public function edit(Bio $bio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bio  $bio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bio $bio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bio  $bio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bio $bio)
    {
        //
    }
}
