<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description','category', 'author_id','views'];

    public function Author()
    {
        return $this->belongsTo(Author::class);
    }

    public function scopeHasViewsGreaterThan($query, $val){
        return $query->where('views', '>', $val);
    }
}
