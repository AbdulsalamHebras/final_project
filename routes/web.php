<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublishingHomeController;
use App\Http\Controllers\StoryController;
use App\Models\Category;
use App\Models\Story;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $categories = Category::all();
    $stories = Story::latest()->limit(5)->get();
    $adventureStories = Category::with([
        'stories' => function ($query) {
            $query->select('name', 'category_id')->limit(5);
        }
    ])->where('name', 'Adventure')->first();
    $historyStories = Category::with([
        'stories' => function ($query) {
            $query->select('name', 'category_id')->limit(5);
        }
    ])->where('name', 'History')->first();
    return view('dashboard', compact('categories', 'stories', 'adventureStories', 'historyStories'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::resource('/category', CategoryController::class);
    Route::resource('/story', StoryController::class);
    Route::resource('/author', AuthorController::class);
    Route::resource('/publishing_home', PublishingHomeController::class);
    Route::get('/story/read/{id}', [StoryController::class, 'read'])->name('story.read');
    Route::get('/story/favorite/{id}', [StoryController::class, 'favorite'])->name('story.favorite');
});

require __DIR__ . '/auth.php';
