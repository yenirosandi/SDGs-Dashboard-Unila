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
        \App\User::insert([
             [
               'id'  			=> 1,
               'name'  			=> 'Admin SDGs Center Unila',
               'username'		=> 'admin123',
               'email' 			=> 'admin@admin.com',
               'password'		=> bcrypt('admin123'),
               'gambar'			=> NULL,
               'admin'			=> '1',
               'remember_token'	=> NULL,
               'created_at'      => \Carbon\Carbon::now(),
               'updated_at'      => \Carbon\Carbon::now()
             ],

         ]);
     }
 }
