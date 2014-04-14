<?php

use Illuminate\Support\Facades\Facade;

class ImageFace extends Facade {
	protected static function getFacadeAccessor() {
		return 'Image';
	}
}
