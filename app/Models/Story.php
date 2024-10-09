<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = [
        "name",
        "summary",
        "writing_date",
        "image",
        "category_id",
        "language",
        "parts",
        "deposit_number",
        "edition_number",
        "deposit_date",
        "pages",
        "copies",
        "price",
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function publishingHomes()
    {
        return $this->belongsToMany(PublishingHome::class, 'story_publishing_homes', 'story_id', 'publishing_home_id');
    }
    public function authors()
    {
        return $this->belongsToMany(Author::class, 'story_authors', 'story_id', 'author_id');
    }
    use HasFactory;
}
