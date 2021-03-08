<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
               'name'=>'Admin',
               'email'=>'eduardopantoja201116@gmail.com',
                'is_admin'=>'1',
               'password'=> bcrypt('2011lalo'),
            ],
            [
               'name'=>'Regular User',
               'email'=>'laura@gmail.com',
                'is_admin'=>'0',
               'password'=> bcrypt('2011laura'),
            ],
        ];
  
        foreach ($userData as $key => $val) {
            User::create($val);
        }

    }
}
