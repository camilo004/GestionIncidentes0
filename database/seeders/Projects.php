<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class Projects extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Project::create([
        	'name' => 'Proyecto A',
        	'description' => 'El proyecto A consiste en desarrollar un sitio web moderno.'
        ]);

        Project::create([
        	'name' => 'Proyecto B',
        	'description' => 'El proyecto B consiste en desarrollar una aplicación Android.'
        ]);
    }
}
