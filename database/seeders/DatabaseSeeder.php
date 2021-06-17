<?php

namespace Database\Seeders;

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
        
        // pode rodar quantos seeders quiser
        $this->call(class:professorSeeder::class);
        // $this->call(class:alunoSeeder::class);
    }
}
