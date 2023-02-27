<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LikeToWorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('like_to_works')->insert([
			['with' => 'women','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['with' => 'boys','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['with' => 'girls','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['with' => 'seniors','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['with' => 'youngers','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['with' => 'both-boys-and-girls','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['with' => 'newsers','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['with' => 'all','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
		]);
    }
}
