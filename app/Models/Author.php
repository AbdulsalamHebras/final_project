<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        "name",
        "description",
        "DOB",
        "DOD",
        "nationality",
        "phone_number",
        "email",
        "job",
        "image",
    ];
    public function stories()
    {
        return $this->belongsToMany(Story::class, 'story_authors', 'author_id', 'story_id');
    }
    use HasFactory;
}
