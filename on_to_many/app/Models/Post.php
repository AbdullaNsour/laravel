<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    /**
     * @return BelongsTo
     * @description get the category for the blog post.
     */
    public function category(): HasOne
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }
}
