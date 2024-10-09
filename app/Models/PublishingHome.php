<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublishingHome extends Model
{
    protected $fillable = [
        "name",
        "country",
        "phone_number",
        "email",
        "image",
    ];

    public function stories()
    {
        return $this->belongsToMany(Story::class, 'story_publishing_homes', 'publishing_home_id', 'story_id');
    }
    use HasFactory;
}
