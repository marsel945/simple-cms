<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_roles')->insert([
            [
                'name' => 'Super Admin',
                'description' => fake()->sentence(50),
            ],
            [
                'name' => 'Guest',
                'description' => fake()->sentence(50),
            ]
        ]);
    }
}
