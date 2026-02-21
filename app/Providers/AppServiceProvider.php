<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        try {
            if (\Illuminate\Support\Facades\Schema::hasTable('site_settings')) {
                $siteSettings = \Illuminate\Support\Facades\Cache::rememberForever('site_settings', function () {
                    return \App\Models\SiteSetting::first() ?? new \App\Models\SiteSetting();
                });
                \Illuminate\Support\Facades\View::share('site_settings', $siteSettings);
            }

            if (\Illuminate\Support\Facades\Schema::hasTable('social_links')) {
                $socialLinks = \Illuminate\Support\Facades\Cache::rememberForever('social_links', function () {
                    return \App\Models\SocialLink::all();
                });
                \Illuminate\Support\Facades\View::share('social_links', $socialLinks);
            }
        } catch (\Exception $e) {
            // Silently fail if table doesn't exist yet during migrations
        }
    }
}
