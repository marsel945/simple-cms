<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        DB::table('users')->insert([
            [
                'id' => 'A',
                'role_id' => 1,
                'name' => 'Administrator',
                'email' => 'super.admin' . '@gmail.com',
                'password' => Hash::make('password'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 'B',
                'role_id' => 2,
                'name' => 'Marselinus Harson Rewo',
                'email' => 'marselinus.system' . '@gmail.com',
                'password' => Hash::make('password'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
