<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
    }
}
