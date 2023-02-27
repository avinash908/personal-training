<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
			['language' => 'English','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['language' => 'Arabic','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['language' => 'German','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['language' => 'French','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['language' => 'Chinees','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['language' => 'Spanish','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['language' => 'Turkish','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['language' => 'Italian','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['language' => 'Japnees','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['language' => 'Polish','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['language' => 'Hindi','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
			['language' => 'Urdu','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['language' => 'Bengali','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
		]);
    }
}
