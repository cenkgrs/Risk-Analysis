<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::create([
            'name' => 'Cenk',
            'email' => 'cenk@example.com',
            'password' => Hash::make('123456'),
        ]);

        $this->command->info('Admin user created: admin@example.com / 123456');
    }
}
