<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            'user_name' => 'admin',
            'user_email' => 'admin@admin.com',
            'user_password' => 'admin',
        ]);
    }

}
