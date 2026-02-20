<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'tags',
        'external_link',
        'sort_order',
        'is_visible',
    ];

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

        static::saved(function ($portfolio) {
            // Fix Windows file permission inheritance for uploaded files
            if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN' && $portfolio->isDirty('image') && $portfolio->image) {
                $path = storage_path('app/public/' . $portfolio->image);
                if (file_exists($path)) {
                    exec('icacls "' . str_replace('/', '\\', $path) . '" /reset /q');
                }
            }
        });

        static::deleted(function ($portfolio) {
            if ($portfolio->image) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($portfolio->image);
            }
        });

        static::updated(function ($portfolio) {
            if ($portfolio->isDirty('image')) {
                $originalImage = $portfolio->getOriginal('image');
                if ($originalImage) {
                    \Illuminate\Support\Facades\Storage::disk('public')->delete($originalImage);
                }
            }
        });
    }
}
