<?php

use Pirate\User\UserRepositoryInterface;

class HomeController extends BaseController {

    protected $user;

    public function __construct(Pirate\User\UserService $user)
    {
        $this->user = $user;

    }

	public function showWelcome()
	{
        $map = $this->user->getUserMap();

        dd ($map);

        die;
        if(!Auth::check())
        {
            Redirect::to('/login');
        }

        $this->layout->content = View::make('index.main', array('user'=> Auth::getUser(),'auth' => Auth::viaRemember()));
	}

}
