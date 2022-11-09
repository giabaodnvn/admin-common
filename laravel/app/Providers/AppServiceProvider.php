<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use Illuminate\Support\Facades\App;

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
        view()->composer(['elements.menu', 'elements.header','category'], function($view) {
            $locale = App::getLocale();
            $menus = Category::with(['subCategories'])->whereNull('parent_id')->get();
            foreach($menus as $menu) {
                $menu->setDefaultLocale($locale);
            }
            $view->with('menus', $menus);
        });
    }
}
