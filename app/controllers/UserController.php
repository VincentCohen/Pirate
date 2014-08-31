<?php

use Pirate\User\UserRepositoryInterface;

class UserController extends BaseController {

    protected $user;

    protected $layout = 'layouts.user';

    public function __construct(UserRepositoryInterface $user)
    {
        $this->user = $user;
    }

    public function create()
    {
        $user = $this->user;

        if ($user->create(Input::all()))
        {
            Session::flash('message', array('type' => 'success', 'text' => 'Oi! Privateer, enjoy thy quest'));
        }
        else
        {
            Session::flash('message', array('type' => 'danger', 'text' => 'Arrr! You filthy landlubber failed registration.'));
        }

        return Redirect::to('/');
    }

    public function read($username)
    {
        $user = $this->user->findByUsername($username);
        if (!$user)
        {
            Session::flash('message', array('type' => 'danger', 'text' => 'User not found!'));

            return Redirect::to('/');
        }

        $params = array('user'=> $user,'auth' => Auth::viaRemember());

        $this->layout->content = View::make('user.profile', $params);
    }

    public function authenticate()
    {
        $auth = Auth::attempt(array('username' => Input::get('username'), 'password'=> Input::get('password')), true);

        if (!$auth)
        {
            Session::flash('message', array('type' => 'danger', 'text' => 'You failed logging in!'));

            return Redirect::to('/');
        }

        Session::flash('message', array('type' => 'success', 'text' => 'You succesfully loggedin!'));

        return Redirect::to('/user/'.Auth::user()->username);
    }
}