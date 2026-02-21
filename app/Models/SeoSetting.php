<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class SeoSetting extends Model
{
    protected $fillable = [
        'route_name',
        'title',
        'description',
        'keywords',
        'og_image',
    ];

    protected $casts = [
        'keywords' => 'array',
    ];

    protected static function booted(): void
    {
        static::saved(function ($setting) {
            // Fix Windows file permission inheritance for uploaded files
            if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN' && $setting->isDirty('og_image') && $setting->og_image) {
                $path = storage_path('app/public/' . $setting->og_image);
                if (file_exists($path)) {
                    exec('icacls "' . str_replace('/', '\\', $path) . '" /reset /q');
                }
            }
        });

        static::updating(function ($setting) {
            if ($setting->isDirty('og_image')) {
                $oldImage = $setting->getOriginal('og_image');
                if ($oldImage) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });

        static::deleting(function ($setting) {
            if ($setting->og_image) {
                Storage::disk('public')->delete($setting->og_image);
            }
        });
    }
}
