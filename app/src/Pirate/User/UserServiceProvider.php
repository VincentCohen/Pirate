<?php namespace Pirate\User;

use Illuminate\Support\ServiceProvider;
use Entity\EloquentPostRepository;
use Entity\User;

class PostServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind('Pirate\User\Entity\User', function() {
            return new User;
        });

        $this->app->bind('Pirate\User\UserRepositoryInterface', function($app) {
            return new EloquentUserRepository(
                $app->make('Pirate\User\Entity\User')
            );
        });
    }
}
