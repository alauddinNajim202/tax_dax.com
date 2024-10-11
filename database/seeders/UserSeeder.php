<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make(12345678),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'client',
                'email' => 'client@client.com',
                'password' => Hash::make(12345678),
                'role' => 'client',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'tax_prepare',
                'email' => 'tax_prepare@tax_prepare.com',
                'password' => Hash::make(12345678),
                'role' => 'tax_prepare',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
