<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGraphicImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('graphic_images', function($table)
		{
			$table->increments('id');
			$table->string('title');
			$table->text('description');
			$table->string('link_en', 320);
			$table->string('link_vi', 320);
			$table->string('link_word_vi', 320);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('graphic_images');
	}

}
