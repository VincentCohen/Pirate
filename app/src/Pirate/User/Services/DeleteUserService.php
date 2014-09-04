<?php namespace Pirate\User\Service;

use Pirate\User\UserRepositoryInterface;

trait BanUserService {

    protected $user;

    public function __construct(UserRepositoryInterface $repository)
    {
        $this->user = $repository;
    }

    public function updateUser(){}
    public function deleteUser(){}

}