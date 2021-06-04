<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\Course::create([
            'name' 		 		=> 'CCNA',
            'url' 				=> '#',
            'demo_video' 		=> 'demo_video.mp4',
            'description' 		=> 'لان تقنيات سيسكو موجوده في كل مكان مما يعني ان المتدربين بشكل صحيح لنيل هذه الشهاده سيستمر البحث عنهم ؛ وباخذ هذه الدوره ستكون جاهزا ومحققا لمستوى مهاراتك المطلوبه لمسؤول الشبكه',
            'Short_description' => 'لان تقنيات سيسكو موجوده في كل مكان مما يعني ان المتدربين بشكل صح',
            'time' 				=> '20',
            'rating' 			=> '4',
            'price' 			=> '200',
            'categories_id' 	=> 1,
        ]);
    }
}
