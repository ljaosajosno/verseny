<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Pásztor Bertalan',
            'email' => 'PB@email.hu',
            'phone' => 2134235,
            'address' => 'Zalaegerszeg, Kossuth Lajos utca 1.',
            'role' => 'visitor',
            'password' =>  bcrypt('jelszo')
        ]);

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin',
            'phone' => 201201,
            'address' => 'Abaújszántó, Ságvári Endre utca 1.',
            'role' => 'admin',
            'password' =>  bcrypt('admin')
        ]);

        User::factory()->create([
            'name' => 'Petőfi Sándor',
            'email' => 'spet@email.hu',
            'phone' => 12761287,
            'address' => 'Bonyhád, Szent Imre utca 8.',
            'role' => 'visitor',
            'password' =>  bcrypt('12345678')
        ]);
    }
}
