<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Pak Jhon',
            'email' => 'admin@gmail.com',
            'jabatan' => 'Kepala Toko',
            'alamat' => 'Pepabri',
            'no_telepon' => '003032043004',
            'password' => Hash::make('12345678'),
        ]); 
    }
}
