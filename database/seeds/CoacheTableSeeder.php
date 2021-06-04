<?php

use Illuminate\Database\Seeder;

class CoacheTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userone = \App\Models\User::create([
            'name'     	  => 'Hassan',
            'email'       => 'Hassan@gmail.com',
            'rating'      => '4',
            'phone'       => '+249 12345678',
            'jobs'        => 'مدرب',
            'description' => 'تفصيل عن المدرب',
            'password' 	  => bcrypt('123123123'),
        ]);

        $userone->attachRole('coaches');

        $usertwo = \App\Models\User::create([
            'name'        => 'Ali',
            'email'       => 'Ali@gmail.com',
            'phone'       => '+249 12345678',
            'rating'      => '3',
            'jobs'        => 'مدرب',
            'description' => 'تفصيل عن المدرب',
            'password' => bcrypt('123123123'),
        ]);

        $usertwo->attachRole('coaches');

        $userthree = \App\Models\User::create([
            'name'        => 'Ahemd',
            'email'    	  => 'Ahemd@gmail.com',
            'phone'       => '+249 12345678',
            'rating'      => '3',
            'jobs'        => 'مدرب',
            'description' => 'تفصيل عن المدرب',
            'password' => bcrypt('123123123'),
        ]);

        $userthree->attachRole('coaches');

        $userfor = \App\Models\User::create([
            'name'        => 'Abdelhamid',
            'email'       => 'Abdelhamid@gmail.com',
            'phone'       => '+249 12345678',
            'rating'      => '2',
            'jobs'        => 'مدرب',
            'description' => 'تفصيل عن المدرب',
            'password' => bcrypt('123123123'),
        ]);

        $userfor->attachRole('coaches');
    }
}
