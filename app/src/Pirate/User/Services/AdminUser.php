<?php namespace Pirate\User\Service;

Class AdminUser {
    use BanUserService;
//    use Pirate\User\Service\GiveUserSkillsService;
//    use Pirate\User\Service\UpdateUserAvatarService;
//    use Pirate\User\Service\DeleteUserService;

    protected $user;

    public function __construct(UserRepositoryInterface $repository)
    {
        $this->user = $repository;
    }
}