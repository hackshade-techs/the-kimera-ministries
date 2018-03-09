<?php

namespace App\Providers;

use App\Models\Album;
use App\Models\Slide;
use App\Models\ChurchActivity;
use Backpack\NewsCRUD\app\Models\Category;
use Backpack\NewsCRUD\app\Models\Article;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use SeanDowney\BackpackEventsCrud\app\Models\Event;

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

        /* Get the Slides */
        view()->composer(['includes.slider'], function($view) {
            $view->with('slides', Slide::slides());
        });

        /* Get the Featured Church Activities */
        view()->composer(['includes.church-activities'], function($view) {
            $view->with('churchActivities', ChurchActivity::churchActivities());
        });

        /* Get the Recent Articles */
        view()->composer(['pages.blog.recent'], function($view) {
            $view->with('articles', Article::recentArticles());
        });

        /* Get the  Church Activities */
        view()->composer(['pages.join_us'], function($view) {
            $view->with('churchActivities', ChurchActivity::Activities());
        });

        $events = new Event();
        view()->composer(['includes.sidebar'], function ($view) use ($events) {
            $view->with('events', $events->upcoming());
            $view->with('ticket_vendors', config('seandowney.eventscrud.ticket_vendors'));
        });


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
