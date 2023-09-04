<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'customer_id' => Customer::latest()->first()->id,
            'name' => 'Admin',
            'email' => 'lucashenrique_fera@hotmail.com',
            'password' => '12345678', // password
        ]);

        \App\Models\User::factory(30)->create();
    }
}
