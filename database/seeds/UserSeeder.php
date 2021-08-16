<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
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
               'name'=>'Admin',
               'email'=>'admin@therapyms.com',
               'phone_number'=>'0791195687',
               'nationalID'=>'325678767',
               'gender'=> 'male',
               'age'=> '76',
                'is_admin'=>'2',
               'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Therapist',
                'email'=>'therapist@therapyms.com',
                'phone_number'=>'0791195687',
                'nationalID'=>'325678767',
                'gender'=> 'male',
                'age'=> '76',
                 'is_admin'=>'1',
                'password'=> bcrypt('123456'),
             ],
            [
               'name'=>'User',
               'email'=>'user@therapyms.com',
               'phone_number'=>'0791195687',
               'nationalID'=>'325678767',
               'gender'=> 'male',
               'age'=> '76',
                'is_admin'=>'0',
               'password'=> bcrypt('123456'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
