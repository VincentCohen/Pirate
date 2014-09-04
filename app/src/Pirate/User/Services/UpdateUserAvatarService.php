<?php namespace Pirate\User\Service;

use Pirate\User\UserRepositoryInterface;

trait UpdateUserAvatarService {

    protected $user;

    public function __construct(UserRepositoryInterface $repository)
    {
        $this->user = $repository;
    }

    public function updateAvatar() {}
    public function deleteAvatar() {}
}