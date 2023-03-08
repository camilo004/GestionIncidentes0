<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
      
        $this -> call(users::class);
       
        $this->call(Projects::class);
        $this->call(Categorias::class);
        
        $this->call(Levels::class);
        $this->call(ProjectsUser::class);
        $this->call(Incidents::class);

     
    }
}
