<?php namespace Pirate\User\Entity;

use Pirate\User\UserRepositoryInterface;

class EloquentUserRepository implements UserRepositoryInterface
{

    /* @var $user User */
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function readAll()
    {
        return $this->user->all();
    }

    public function create(Array $attributes)
    {
        return $this->user->create($attributes);
    }

    public function findByUsername($username)
    {
        $user = $this->user;

        return $user::where('username', '=', $username)->first();
    }
}