<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Nierimam',
            'email' => 'nierimam@gmail.com',
            'address' => 'gunung soputan',
            'date birth' => '2001-04-13',
            'phone number' => '082144723035',
            'role' => 'customer',
            'password' => Hash::make('123456'),
        ]);
    }
}
