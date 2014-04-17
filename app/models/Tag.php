<?php

class Tag extends Eloquent {
	protected $table = 'tags';

	public $timestamps = false;

	public function graphicImages() {
		return $this->belongsToMany('GraphicImages', 'tags_graphic_images', 'tag_id', 'graphic_image_id');
	}
}