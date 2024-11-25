<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            LevelSeeder::class,
            BankSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'status' => 'active',
            'level_id' => 1,
            'total_withdrawal' => 0,
            'total_deposit' => 0,
            'referrer_id' => null,
            'referrer_code' => Str::random(10),
            'phone' => '01012345678',
            'bank_name' => 'KB국민은행',
            'bank_account_name' => '김민수',
            'bank_account_number' => '1234567890',
            'role' => 'admin',
        ]);
    }
}
