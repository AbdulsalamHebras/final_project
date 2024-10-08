<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];
    public function stories()
    {
        return $this->hasMany(Story::class);
    }
    use HasFactory;
}
