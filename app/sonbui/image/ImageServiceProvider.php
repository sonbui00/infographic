<?php

use Illuminate\Support\ServiceProvider;

class ImageServiceProvider extends ServiceProvider {
	public function register() {
		App::bind('Image', function() {
			return new Image;
		});
	}	
}