<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        // 管理者ユーザーを作成
        User::create([
            'name' => 'admin管理者',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('pppp0000'),
        ]);
    }
}
