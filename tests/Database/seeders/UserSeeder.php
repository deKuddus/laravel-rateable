<?php

namespace laramak\Rateable\Tests\Database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use laramak\Rateable\Tests\models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        User::unguard();
        User::create(['id' => 1]);
        User::create(['id' => 2]);
        User::reguard();
    }
}
