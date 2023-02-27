<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('locations')->insert([
			['location' => 'Safa Park','slug'=> 'safa-park' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['location' => 'Dubai Mall','slug'=> 'dubai-mall' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['location' => 'Burj Khalifa','slug'=> 'burj-khalifa' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['location' => 'Burj Al Arab','slug'=> 'burj-al-arab' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['location' => 'Jumeirah Beach','slug'=> 'jumeirah-beach' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['location' => 'Mall Of The Emirates','slug'=> 'mall-of-the-emirates' ,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
		]);
    }
}
