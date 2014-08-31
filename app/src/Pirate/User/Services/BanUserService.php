<?php namespace Pirate\User;

Class BanUserService {

    protected $user;

    public function __construct(UserRepositoryInterface $repository)
    {
        $this->user = $repository;
    }

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