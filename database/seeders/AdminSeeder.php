<?php

namespace Database\Seeders;

use App\Common\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Nneel',
            'email' => 'admin@nneels.com',
            'password' => Hash::make('password'),
            'role' => Role::Admin
        ]);
    }
}
