<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoryRequest;
use App\Models\Author;
use App\Models\Category;
use App\Models\PublishingHome;
use App\Models\Story;
use DB;
use Illuminate\Http\Request;

class StoryController extends Controller
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
        $category = Category::all();
        $author = Author::all();
        $publishing_home = PublishingHome::all();
        $lastItem = Story::orderBy('id', 'desc')->first();
        if ($lastItem) {
            $newStoryID = $lastItem->id;
        } else {
            $newStoryID = 0;
        }
        return view('stories.add_story', [
            'categories' => $category,
            'authors' => $author,
            'publishing_homes' => $publishing_home,
            'newStoryID' => $newStoryID,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoryRequest $request)
    {
        $request->validated();
        $image = $request->file("image")->getClientOriginalName();
        $path = $request->file('image')->storeAs('stories', $image, 'images');
        $story = Story::create([
            'name' => $request->name,
            'summary' => $request->summary,
            'writing_date' => $request->writing_date,
            'image' => $path,
            "category_id" => $request->category_id,
            "language" => $request->language,
            "parts" => $request->parts,
            "deposit_number" => $request->deposit_number,
            "edition_number" => $request->edition_number,
            "deposit_date" => $request->deposit_date,
            "pages" => $request->pages,
            "copies" => $request->copies,
            "price" => $request->price,
        ]);
        $newAuthorIds = $request->input('authors', []);
        $story->authors()->sync($newAuthorIds);
        $newPublishingHomeIds = $request->input('publishing_homes', []);
        $story->publishingHomes()->sync($newPublishingHomeIds);
        return redirect()->route('dashboard')
            ->with("success", "Story added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $stories = Story::select('image')->get();
        $story = Story::with('authors:name')->select('id', 'name', 'summary', 'image')->findOrFail($id);
        return view('stories.details_story', compact('story', 'stories'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Story $story)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Story $story)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Story $story)
    {
        //
    }
    public function read(Request $request, $id)
    {
        $userStory = DB::table('user_read_stories')
            ->where('story_id', $id)
            ->where('user_id', auth()->user()->id)
            ->first();

        if ($userStory) {
            return redirect()->back()->with('message', 'This story has been added before.');
        }

        DB::table('user_read_stories')->insert([
            [
                'story_id' => $id,
                'user_id' => auth()->user()->id,
            ]
        ]);

        return redirect()->back()->with('message', 'Story added successfully.');
    }
    public function favorite(Request $request, $id)
    {

        $favoriteStory = DB::table('user_favorite_stories')
            ->where('story_id', $id)
            ->where('user_id', auth()->user()->id)
            ->first();

        if ($favoriteStory) {
            return redirect()->back()->with('message', 'This story has been added before.');
        }

        DB::table('user_favorite_stories')->insert([
            [
                'story_id' => $id,
                'user_id' => auth()->user()->id,
            ]
        ]);

        return redirect()->back()->with('message', 'Story added successfully.');
    }

}
