<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \Curso\Entities\Client::truncate();
        factory(\Curso\Entities\User::class)->create();
    }
}
