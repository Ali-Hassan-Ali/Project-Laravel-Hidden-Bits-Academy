<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(CourseTableSeeder::class);
    	$this->call(UsersTableSeeder::class);
        $this->call(CoacheTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(FounderTableSeeder::class);
        
    }//end of run

}//end of class seeder
