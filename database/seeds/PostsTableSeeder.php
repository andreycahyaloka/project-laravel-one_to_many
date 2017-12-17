<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('posts')->insert([
			'title' => 'this is the title 1',
			'body' => 'this is the body 1',
			'category_id' => '1',
		]);

		DB::table('posts')->insert([
			'title' => 'this is the title 2',
			'body' => 'this is the body 2',
			'category_id' => '2',
		]);
    }
}
