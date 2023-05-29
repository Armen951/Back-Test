<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Resource::factory()->create([
            'name' => 'Resource 1 ',
        ]);

        \App\Models\Resource::factory()->create([
            'name' => 'Resource 2 ',
        ]);
    }
}
