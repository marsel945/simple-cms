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
        $now = now();
        DB::table('user_roles')->insert([
            [
                'name' => 'Super Admin',
                'description' => fake()->sentence(50),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Guest',
                'description' => fake()->sentence(50),
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ]);
    }
}
