<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionOneRegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("question_one_regions")->insert([
            [
                "name" => "Northern",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Central",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Southern",
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ]);
    }
}
