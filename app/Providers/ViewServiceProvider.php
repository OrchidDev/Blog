<?php

namespace App\Providers;

use App\Http\View\Composers\CommentComposer;
use App\Http\View\Composers\PostComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\CategoryComposer;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('components.app', CategoryComposer::class);
        View::composer('home.sidebar.sidebar', PostComposer::class);
        View::composer('home.sidebar.sidebar', CommentComposer::class);
    }
}
