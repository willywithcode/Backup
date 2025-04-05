<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'is_published' => 'boolean',
        'is_featured' => 'boolean',
    ];

    /**
     * Append attributes to the model.
     *
     * @var array
     */
    protected $appends = [
        'display_excerpt',
        'thumbnail_url',
    ];

    protected function thumbnailUrl(): Attribute
    {
        return Attribute::make(
            get: fn () => asset($this->thumbnail),
        );
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeIsPublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeIsFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Get the excerpt with a maximum length of 600 characters.
     *
     * @return string
     */
    public function getDisplayExcerptAttribute()
    {
        if (empty($this->excerpt)) {
            return '';
        }

        return strlen($this->excerpt) > 350
            ? substr($this->excerpt, 0, 350) . '...'
            : $this->excerpt;
    }
}
