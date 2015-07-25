<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \Curso\Entities\Project::truncate();
        factory(\Curso\Entities\Project::class, 10)->create();
    }
}
