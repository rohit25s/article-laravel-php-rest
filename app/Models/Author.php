<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Http\Models\Article;

class Author extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function Articles()
    {
        return $this->hasMany(Article::class);
    }
}
