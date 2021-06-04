<?php

use Illuminate\Database\Seeder;

class FounderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $founder = \App\Models\Founder::create([
            'name' => 'د. اسراء المساعد',
            'job' => 'مدرب دولي',
            'description' => 'عضو البورد الأمريكي للمدربين الدوليين مهندس شبكات واستاذ محاضر بتقنيه المعلومات حاصله على : دكتوراه في امن المعلومات ماجستيرفي هندسه الكمبيوتر ماجستير في اداره الاعمال باحث ومطورفي مجال Penetration Testing',
            'email' => 'hidden@info.com',
            'phone' => '(123)-456-7890',
        ]);

    }//end of  run

}//en dof model
