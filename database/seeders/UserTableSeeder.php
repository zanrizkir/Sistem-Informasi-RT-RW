<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Sauzan',
                'email' => 'sauzan@adminrw.com',
                'password' => bcrypt('123456789'),
                'id_role' => 1,
            ],
            [
                'name' => 'Hisam',
                'email' => 'hisam@adminrt.com',
                'password' => bcrypt('123456789'),
                'id_role' => 2,
            ]
        ];
        DB::table('users')->insert($user);
    }
}
