<?php
// https://medium.com/laravel-4/laravel-4-authentication-e8d93c9ce0e2
class UserController extends BaseController {

    protected $user;

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
        if ($user = $this->user->findByUsername($username))
        {
            var_dump($user);
        }
        else
        {
            echo 'user not found';
        }
    }

    public function authenticate()
    {
        if ($auth = Auth::attempt(array('username' => Input::get('username'), 'password'=> Input::get('password')), true))
        {
            Session::flash('message', array('type' => 'success', 'text' => 'You succesfully loggedin!'));
        }
        else
        {
            Session::flash('message', array('type' => 'danger', 'text' => 'You failed logging in!'));
        }

        return Redirect::to('/');
    }
}