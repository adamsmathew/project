<?php

namespace Database\Seeders;
use App\Models\User;        // ---------user calling
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::factory(30)->create();
    }
}
