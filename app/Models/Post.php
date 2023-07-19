<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;


class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'body',
        'active',
        'published_at',
        'user_id',
        'meta_title',
        'meta_description',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }


    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function getFormattedDate()
    {
        return $this->published_at->format('F jS Y' );
    }

    public function shortBody(): string
    {
        return Str::words(strip_tags($this->body), 20);
    }

    public function getThumbnail()
    {
        if(str_starts_with($this->thumbnail, 'http'))
        {
            return $this->thumbnail;
        } else
        {
            return '/storage/'. $this->thumbnail;
        }
    }

}
