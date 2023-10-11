<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $now = now();
        DB::table('categories')->insert([
            [
                'title' => "Course",
                'slug' => 'course',
                'status' => 'draft',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => "Course Design",
                'slug' => 'course-design',
                'status' => 'live',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => "Technology",
                'slug' => 'technology',
                'status' => 'live',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
