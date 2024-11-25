<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bank;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banks = [
            ['bank_name' => 'KB국민은행', 'bank_account_name' => '김민수', 'bank_account_number' => '1234567890', 'type' => 'Hàn Quốc'],
            ['bank_name' => 'Techcombank', 'bank_account_name' => 'Nguyễn Văn A', 'bank_account_number' => '1234567890', 'type' => 'Việt Nam'],
        ];
        foreach ($banks as $bank) {
            Bank::create($bank);
        }
    }
}
