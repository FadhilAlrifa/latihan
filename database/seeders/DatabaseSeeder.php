<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'admin',
            'username'=>'admin',
            'nik'=>'123',
            'tlp'=>'123234214',
            'level'=>'admin',
            'password' =>bcrypt('admin'),
        ]);

    }
}
