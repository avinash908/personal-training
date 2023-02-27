<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ExpertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('experties')->insert([
			['title' => 'Body building','slug'=> 'bodybuilding' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'General Fitness','slug'=> 'general-fitness' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'Children Fitness','slug'=> 'children-fitness' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'Flexibility','slug'=> 'flexibility' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'Endurance','slug'=> 'endurance' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'Boxing','slug'=> 'boxing' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'Karate','slug'=> 'karate' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'Jiu Jitsu','slug'=> 'jiu-jitsu' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'MMA','slug'=> 'mma' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'Pilates','slug'=> 'pilates' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'Pre-& Post Natal','slug'=> 'pre-post-natal' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'Rehabilitation','slug'=> 'rehabilitation' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'Swimming','slug'=> 'swimming' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'Tennis','slug'=> 'tennis' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'Artistic Gymnastics','slug'=> 'artistic-gymnastics' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'Rhythmic Gymnastics ','slug'=> 'rhythmic-gymnastics' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'Trampoline','slug'=> 'trampoline' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'Zumba','slug'=> 'zumba' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'Yoga ','slug'=> 'yoga' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'Basketball ','slug'=> 'basketball' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'Calisthenics ','slug'=> 'calisthenics' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'Dancing fitness ','slug'=> 'dancing-fitness' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'EMS ','slug'=> 'ems' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'TRX ','slug'=> 'trz' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'Athletic ','slug'=> 'athletic' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'Squash ','slug'=> 'squash' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'Badminton ','slug'=> 'badminton' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['title' => 'Special Needs ','slug'=> 'special-needs' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
		]);

       DB::table('images')->insert([
       	['url' => 'bodybuilding.png','imageable_id'=> 1 , 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'fitness.png','imageable_id'=> 2 , 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'childrenfitness.png','imageable_id'=> 3 , 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'flexibility.png','imageable_id'=> 4 , 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'endurance.png','imageable_id'=> 5 , 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'boxing.png','imageable_id'=> 6 , 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'karate.png','imageable_id'=> 7 , 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'JiuJitsu.png','imageable_id'=> 8 , 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'mma.png','imageable_id'=> 9 , 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'pilates.png','imageable_id'=> 10 , 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'preandpostnatal.png','imageable_id'=> 11, 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'rehabilitation.png','imageable_id'=> 12, 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'swimming.png','imageable_id'=> 13 , 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'tennis.png','imageable_id'=> 14 , 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'artisticgymnast.png','imageable_id'=> 15 , 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'rhythmicgymnastics.png','imageable_id'=> 16, 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'trampoline.png','imageable_id'=> 17, 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'zumba.png','imageable_id'=> 18, 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'yoga.png','imageable_id'=> 19, 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'basketball.png','imageable_id'=> 20, 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'calisthenics.png','imageable_id'=> 21, 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'dancingfitness.png','imageable_id'=> 22, 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'ems.png','imageable_id'=> 23, 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'trx.png','imageable_id'=> 24, 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'athletic.png','imageable_id'=> 25, 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'squash.png','imageable_id'=> 26, 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'badminton.png','imageable_id'=> 27, 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       	['url' => 'specialneeds.png','imageable_id'=> 28, 'imageable_type' => 'App\Experties', 'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
       ]);
    }
}
