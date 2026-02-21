<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\SiteSetting::create([
            'company_name' => 'COMPANY_NAME',
            'email' => 'info@email.test',
            'phone_number' => '+1234567890',
            'address' => '123 Main Street',
        ]);
    }
}
