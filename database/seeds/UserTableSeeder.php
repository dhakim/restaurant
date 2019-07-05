<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder{

    public function run ()
    {
        factory('App\User' , 50)->create();

    }

}