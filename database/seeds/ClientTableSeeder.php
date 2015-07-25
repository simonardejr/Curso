<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \Curso\Entities\Client::truncate();
        factory(\Curso\Entities\Client::class, 10)->create();
    }
}
