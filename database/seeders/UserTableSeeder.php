<?php

namespace Database\Seeders;

use App\Models\User;
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

        // jadi setelah seeds touch 30, do updates
        User::first()->update([
            'email' => 'imambahyp@gmail.com',
            'name' => 'imam'
        ]);
    }
}
