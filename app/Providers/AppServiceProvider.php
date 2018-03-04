<?php

namespace App\Providers;

use App\Models\Album;
use App\Models\Slide;
use App\Models\ChurchActivity;
use Backpack\NewsCRUD\app\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        /* Get all the categories for the news articles in the sidebar */
        view()->composer(['includes.sidebar'], function($view) {
            $view->with('categories', Category::categories());
        });

        /* Get all the albums basing on the latest in the gallery view */
        view()->composer(['pages.gallery'], function($view) {
            $view->with('albums', Album::albums());
        });

        /* Gets the Slides */
        view()->composer(['includes.slider'], function($view) {
            $view->with('slides', Slide::slides());
        });

        /* Gets the Featured Church Activities */
        view()->composer(['includes.church-activities'], function($view) {
            $view->with('churchActivities', ChurchActivity::churchActivities());
        });

        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
