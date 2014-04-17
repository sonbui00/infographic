<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('TagsTableSeeder');
		$this->call('TagGraphicImageSeeder');

		// $this->call('UserTableSeeder');
	}

}

class TagsTableSeeder extends Seeder {

	public function run() {
		DB::table('tags')->delete();

		for ($i = 1; $i < 20; $i++) {
			Tag::create(array('name' => 'tag'.$i));
		}
	}

}

class TagGraphicImageSeeder extends Seeder {
	public function run() {
		DB::table('tags_graphic_images')->delete();

		$tags = Tag::all();
		$graphicImages = GraphicImages::all();

		foreach ($graphicImages as $image) {
			$image->tags()->attach($tags[rand(0, sizeof($tags) - 1)]->id);
		}

	}
}