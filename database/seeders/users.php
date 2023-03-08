<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Admin
       User::create([
        'name' => 'Camilo',
        'email' => 'camilomejia5492@gmail.com',
        'password' => bcrypt('123'),
        'role' => 0
    ]);

    User::create([
        'name' => 'Juan',
        'email' => 'juan@gmail.com',
        'password' => bcrypt('123'),
        'role' => 1
    ]);

    // Client
    User::create([
        'name' => 'Claudia',
        'email' => 'client@gmail.com',
        'password' => bcrypt('123'),
        'role' => 2
    ]);
    User::create([ // 3
        'name' => 'Soporte S1',
        'email' => 'support1@gmail.com',
        'password' => bcrypt('123123'),
        'role' => 1
    ]);
    User::create([ // 4
        'name' => 'Soporte S2',
        'email' => 'support2@gmail.com',
        'password' => bcrypt('123123'),
        'role' => 1
    ]);
       
    }
}
