<?php

class HomeController extends BaseController
{

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function showWelcome()

    {

        return View::make('hello');
    }

    public function getIndex()
    {
        if(Auth::user()){
            return View::make('user_area.index');
        } else {
        return View::make('home.index');
        }
    }
    public function getTest(){
        return View::make('test')->withFormart('test');
    }







}
