<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('teams')->delete();

		$teams = array(
			['id' => 1, 'name' => 'Team 1', 'slug' => 'team-1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 2, 'name' => 'Team 2', 'slug' => 'team-2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Team 3', 'slug' => 'team-3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		);

		DB::table('teams')->insert($teams);
	}
}