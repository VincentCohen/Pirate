<?php

class HomeController extends BaseController {

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
