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
   [
     'user_name' => 'chen',
     'password' =>Hash::make('123456'),
     'user_mail' => 'kitinc198744@hotmail.com',
     'user_phone' => '08048621144',
     'user_gender' => '1',
   ],
    }
}
