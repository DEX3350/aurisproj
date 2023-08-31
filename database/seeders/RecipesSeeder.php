<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Str;
use App\Models\Recipe;


class RecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  DB::table('recipes')->insert([
        //     'content' => str::random(100),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        Recipe::factory()->count(10)->create();
    }
}
