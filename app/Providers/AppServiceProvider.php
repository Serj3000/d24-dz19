<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // View::share('categories', \App\Category::all());
        // View::share('tags', \App\Tag::all());

        View::share('categories', \App\Category::get());
        View::share('tags', \App\Tag::paginate());
        View::share('postys', \App\Post::latest('created_at')->paginate(5));

        //View::share('single', \App\Post::latest('created_at')->paginate(1));
    }
}
