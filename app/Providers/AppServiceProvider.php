<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use App\Temporada;
use App\Post;
use App\Apoiador;

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
        $anos = Temporada::get()->map(function ($item)
        {
           return $item->ano;
        })->sort()->reverse();
        View::share('anos', $anos);

        $posts = Post::get();
        View::share('posts', $posts);

        $apoiadores = Apoiador::get();
        View::share('apoiadores', $apoiadores);
    }
}
