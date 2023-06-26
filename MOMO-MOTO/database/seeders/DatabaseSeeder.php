<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
        // \App\Models\Admin::factory()->create([
        //     'pin' => 12032003,
        // ]);

        \App\Models\Product::factory(10)->create();

    }
}
