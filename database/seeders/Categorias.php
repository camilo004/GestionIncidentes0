<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Categorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create([
			'name' => 'Categoría A1',
			'project_id' => 1
        ]);
        Category::create([
			'name' => 'Categoría A2',
			'project_id' => 1
        ]);

        Category::create([
			'name' => 'Categoría B1',
			'project_id' => 2
        ]);
        Category::create([
			'name' => 'Categoría B2',
			'project_id' => 2
        ]);
    }
}
