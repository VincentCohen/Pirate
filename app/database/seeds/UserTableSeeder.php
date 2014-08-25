<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'email' => 'vincent@pirate.dev',
            'username' => 'WhiteBeard',
            'password' => Hash::make('kenway'),
            'remember_token' => Hash::make('blackbeard'),
            'group' => 1,
            'experience' => 100,
        ));
    }
}