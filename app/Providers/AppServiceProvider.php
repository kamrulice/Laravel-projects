<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Chapter;
use App\Question;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       View::composer('fontEnd.include.sidebar',function ($view){
           $chapterById = Chapter::where('publicationStatus',1)->get();
           $view->with('chapterById',$chapterById);
       });
       View::composer('fontEnd.home.homeContent',function($view){
           $questionById = Question::all()->take(10);
           $view->with('questionById',$questionById);
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
