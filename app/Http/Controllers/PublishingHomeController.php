<?php

namespace App\Http\Controllers;

use App\Models\PublishingHome;
use Illuminate\Http\Request;

class PublishingHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("publishing_homes/add_home");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validated();
        $image = $request->file("image")->getClientOriginalName();
        $path = $request->file('image')->storeAs('publishingHomes', $image, 'images');
        PublishingHome::create([
            "name" => $request->name,
            "country" => $request->country,
            "phone_number" => $request->phone_number,
            "email" => $request->email,
            "image" => $path
        ]);
        return redirect()->route("dashboard")
            ->with("success", "Publishing home added successfully");
    }


    /**
     * Display the specified resource.
     */
    public function show(PublishingHome $publishingHome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PublishingHome $publishingHome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PublishingHome $publishingHome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PublishingHome $publishingHome)
    {
        //
    }
}
