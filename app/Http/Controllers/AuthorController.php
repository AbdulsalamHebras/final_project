<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorRequest;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("authors.add_author");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AuthorRequest $request)
    {

        $request->validated();
        $image = $request->file("image")->getClientOriginalName();
        $path = $request->file('image')->storeAs('authors', $image, 'images');
        Author::create([
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
            'DOB' => $request->DOB,
            'DOD' => $request->DOD,
            'nationality' => $request->nationality,
            'phone_number' => $request->phone_number,
            'job' => $request->job,
            'image' => $path,
        ]);
        return redirect()->route('dashboard')
            ->with('success', 'author added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        //
    }
}
