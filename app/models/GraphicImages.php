<?php
class GraphicImages extends Eloquent {

	protected $table = 'graphic_images';

	public function tags() {
		return $this->belongsToMany('Tag', 'tags_graphic_images', 'graphic_image_id', 'tag_id');
	}
	
}