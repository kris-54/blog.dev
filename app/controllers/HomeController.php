<?php

class HomeController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |   Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function showWelcome()
    {
        return Redirect::action('HomeController@sayhello', array('Bob'));
    }

    public function portfolio()
    {
        return View::make('portfolio');
    }

    public function resume()
    {
        return View::make('resume');
    }

    public function sayhello($name)
    {
        $data = array('name' => $name);
        return View::make('my-first-view')->with($data);
    }

    public function rolldice($guess)
    {
        $random = mt_rand(1,6);
        $data = array ('random' => $random, 'guess' => $guess);
        return View::make('roll-dice')->with($data);
    }
}
