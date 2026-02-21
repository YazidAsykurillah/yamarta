<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
    {
        protected $guarded = [];

        protected static function booted()
        {
            static::saved(function () {
                \Illuminate\Support\Facades\Cache::forget('social_links');
            });
            
            static::deleted(function () {
                \Illuminate\Support\Facades\Cache::forget('social_links');
            });
        }
    }
