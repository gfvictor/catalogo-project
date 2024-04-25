<?php

namespace Database\Seeders;

use App\Models\Objects;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
         User::factory(3)->create()->each(function ($user) {
             $user->objects()->saveMany(Objects::factory(50)->make());
         });
    }
}
