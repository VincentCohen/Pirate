<?php namespace Pirate\User;

use Pirate\User\UserRepositoryInterface;

Class UserService
{
    private $repository;

    public function __constuct()
    {
        $this->repository = new UserRepositoryInterface();
    }

    public function getUserMap($userID = 0)
    {
        $map = '';
        if (1 == 2)
        {
            // do stuff
        }
        else
        {
            return new \Pirate\User\Service\AdminUser(  );
        }
    }
}