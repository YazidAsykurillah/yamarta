<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
    {
        protected $guarded = [];

        protected static function booted()
        {
            static::updated(function ($setting) {
                if ($setting->isDirty('logo') && $setting->getOriginal('logo') !== null) {
                    \Illuminate\Support\Facades\Storage::disk('public')->delete($setting->getOriginal('logo'));
                }
                if ($setting->isDirty('favicon') && $setting->getOriginal('favicon') !== null) {
                    \Illuminate\Support\Facades\Storage::disk('public')->delete($setting->getOriginal('favicon'));
                }
            });

            static::deleted(function ($setting) {
                if ($setting->logo !== null) {
                    \Illuminate\Support\Facades\Storage::disk('public')->delete($setting->logo);
                }
                if ($setting->favicon !== null) {
                    \Illuminate\Support\Facades\Storage::disk('public')->delete($setting->favicon);
                }
            });
        }
    }
