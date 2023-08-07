<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Quest;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(20)->create();
        Quest::factory(20)->create();
    }
}
