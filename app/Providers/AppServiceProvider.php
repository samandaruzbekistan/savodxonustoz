<?php

namespace App\Providers;

use App\Enums\CategoryType;
use App\Models\Category;
use App\Models\Content;
use App\Models\Resource;
use App\Models\Video;
use App\Support\Settings;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(Settings::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Relation::enforceMorphMap([
            'content' => Content::class,
            'resource' => Resource::class,
            'video' => Video::class,
        ]);

        View::composer(['partials.public-nav', 'partials.footer'], function ($view): void {
            $view->with('navCategories', Category::query()
                ->where('type', CategoryType::Content)
                ->whereNull('parent_id')
                ->orderBy('sort_order')
                ->get());
        });

        View::share('settings', $this->app->make(Settings::class));
    }
}
