<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            "name"=>'admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'role' => 'admin',
            'password' => Hash::make('123'),
        ]);
        DB::table('users')->insert([
            "name"=>'petugas',
            'email' => 'petugas@gmail.com',
            'username' => 'petugas',
            'role' => 'petugas',
            'password' => Hash::make('123'),
        ]);
    }
}
