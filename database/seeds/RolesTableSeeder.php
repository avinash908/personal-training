<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('roles')->insert([
		 ['title' => 'admin','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
		 ['title' => 'employee','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
		 ['title' => 'trainer','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
		]);
    }
}
