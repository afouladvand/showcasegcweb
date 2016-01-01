<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('inputrules')->delete();
        DB::table('formulare')->delete();
        DB::table('users')->delete();
        DB::table('fachkrafte')->delete();
        DB::table('installateure')->delete();


		$this->call('BaseUserTableSeeder');
       // $this->call('UserTableSeeder100');
        $this->call('InstallateurTableSeeder');
        $this->call('FachkraftTableSeeder');
       $this->call('FormValidationSeeder');


	}

}
