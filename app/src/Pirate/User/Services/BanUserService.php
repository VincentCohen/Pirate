<?php namespace Pirate\User\Service;

use Pirate\User\UserRepositoryInterface;

trait BanUserService {



    public function banUser()
    {
        if ($this->user->isBannable())
        {
            $this->user->setBan(1);

            // logic to send mail to user
        }
    }

    public function unban()
    {
        if ($this->user->isBanned())
        {
            $this->user->setBan(0);
        }
    }

}