<?php

namespace Database\Seeders;

use App\Models\Fields;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fields::factory()->count(8)->create();
    }
}
