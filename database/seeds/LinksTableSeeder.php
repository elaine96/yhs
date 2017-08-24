<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('links')->insert(
        	[
				'link_name' => 'ios版下载',
                'link_icon' => 'apple',
				'link_href' => '',
			]
		);
		DB::table('links')->insert(
        	[
				'link_name' => '安卓版下载',
                'link_icon' => 'android',
				'link_href' => '',
			]
		);
    }
}
