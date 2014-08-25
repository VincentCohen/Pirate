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
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
    protected $user;

    public function __construct(UserRepositoryInterface $user)
    {
        $this->user = $user;
    }

	public function showWelcome()
	{
        if(!Auth::check())
        {
            Redirect::to('/login');
        }

        $this->layout->content = View::make('index.main', array('user'=> Auth::getUser(),'auth' => Auth::viaRemember()));
	}

}
