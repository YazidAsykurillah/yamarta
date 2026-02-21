<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'tags',
        'external_link',
        'sort_order',
        'is_visible',
    ];

    public function images()
    {
        return $this->hasMany(PortfolioImage::class)->orderBy('sort_order');
    }

    protected $casts = [
        'tags' => 'array',
        'is_visible' => 'boolean',
    ];

    protected static function booted(): void
    {
        static::saving(function ($portfolio) {
            if (empty($portfolio->slug)) {
                $portfolio->slug = \Illuminate\Support\Str::slug($portfolio->title);
            }
        });

        static::deleting(function ($portfolio) {
            $portfolio->images->each(function ($image) {
                $image->delete();
            });
        });
    }
}
