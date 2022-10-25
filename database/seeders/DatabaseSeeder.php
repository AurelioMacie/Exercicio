<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // Instituition::create([
        //     'name' => 'BCI',
        //     'description' => 'Banco',
        // ]);

        User::create([
            'nuit' => '123456789B',
            'name' => 'Aurelio',
            'phone' => '875101632',
            'birth' => '1998-10-03',
            'gender' => 'M',
            'notes' => 'Uma',
            'email' => 'famacie24@gmail.com',
            'password' => bcrypt('Junior07'),
            'status' => 'Activo',
            'permission' => 'Sem',
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
