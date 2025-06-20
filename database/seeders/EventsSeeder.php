<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EventsModel; // <-- Add this line

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         EventsModel::factory()->count(40)->create(); // Use the correct class name
    }
}
