<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'title', 'slug', 'desc', 'img', 'views','status', 'publish_date'];
    //ditutorial views

    // relasi ke kategorie
    public function Category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}
