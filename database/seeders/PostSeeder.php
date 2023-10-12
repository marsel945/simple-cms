<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        DB::table('posts')->insert([
            [
                'user_id' => 1,
                'category_id' => 1,
                'title' => "Beginner Bootstrap 5 Training",
                'slug' => 'beginner-bootstrap-5-training',
                'excerpt' => 'course beginner',
                'content' => fake()->sentence(10),
                'status' => 'draft',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 1,
                'category_id' => 2,
                'title' => "Beginner Figma  Training",
                'slug' => 'beginner-figma-training',
                'excerpt' => 'course beginner',
                'content' => fake()->sentence(10),
                'status' => 'published',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 1,
                'category_id' => 1,
                'title' => "Advance React Course",
                'slug' => 'advance-react-ourse',
                'excerpt' => 'course beginner',
                'content' => fake()->sentence(10),
                'status' => 'scheduled',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
