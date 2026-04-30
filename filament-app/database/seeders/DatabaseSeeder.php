<?php

namespace Database\Seeders;

use App\Models\Cat;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'email' => 'christoffer@emplate.it',
            'name' => 'Christoffer',
            'password' => bcrypt('hej123'),
        ]);
        User::factory(10)->create()->each(function (User $user): void {
            Cat::factory(rand(1, 3))->create(['user_id' => $user->id]);
        });
    }
}
