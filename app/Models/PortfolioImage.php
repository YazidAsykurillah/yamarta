<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioImage extends Model
{
    protected $fillable = [
        'portfolio_id',
        'image',
        'sort_order',
    ];

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }

    protected static function booted(): void
    {
        static::saved(function ($portfolioImage) {
            // Fix Windows file permission inheritance for uploaded files
            if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN' && $portfolioImage->isDirty('image') && $portfolioImage->image) {
                $path = storage_path('app/public/' . $portfolioImage->image);
                if (file_exists($path)) {
                    exec('icacls "' . str_replace('/', '\\', $path) . '" /reset /q');
                }
            }
        });

        static::deleted(function ($portfolioImage) {
            if ($portfolioImage->image) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($portfolioImage->image);
            }
        });

        static::updated(function ($portfolioImage) {
            if ($portfolioImage->isDirty('image')) {
                $originalImage = $portfolioImage->getOriginal('image');
                if ($originalImage) {
                    \Illuminate\Support\Facades\Storage::disk('public')->delete($originalImage);
                }
            }
        });
    }
}
