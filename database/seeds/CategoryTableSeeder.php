<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['مسار الشبكات', 'مسار الامن السيبراني', 'المسار الاداري'];

        foreach ($categories as $category) {

            \App\Models\Category::create([
                'name'  => $category,
            ]);
        }//end of foreach
    }//end ofrun
}
