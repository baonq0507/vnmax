<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Level;
class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = [
            ['level_name' => 'Level 1', 'amount' => 0],
            ['level_name' => 'Level 2', 'amount' => 1000000],
            ['level_name' => 'Level 3', 'amount' => 3000000],
            ['level_name' => 'Level 4', 'amount' => 5000000],
        ];

        foreach ($levels as $level) {
            Level::create($level);
        }
    }
}
