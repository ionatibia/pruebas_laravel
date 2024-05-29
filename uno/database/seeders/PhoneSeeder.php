<?php

namespace Database\Seeders;

use App\Models\Phone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Phone::create([
            'prefix' => 34,
            'phone_number' => 635758566,
            'user_id' => 1
        ]);
        Phone::create([
            'prefix' => 34,
            'phone_number' => 6665700810,
            'user_id' => 1
        ]);
    }
}
