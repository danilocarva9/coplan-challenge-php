<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'sobrenome' => 'Master',
            'email' => 'admin@teste.com',
            'password' => bcrypt('qwe123'),
            'role_id' => 1
        ]);
    }
}
