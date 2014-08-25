<?php

interface UserRepositoryInterface
{
    public function readAll();

    public function create(Array $attributes);

    public function findByUsername($username);
}