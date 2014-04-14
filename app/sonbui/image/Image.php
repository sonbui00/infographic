<?php

class Image {

	public static function make($file) {
		Log::error(dd($file));
	}

	public static function createThumbs( $pathToImage, $pathToThumb, $thumbWidth ) 
	{
  	
		$source_image = imagecreatefromjpeg($pathToImage);
		$width        = imagesx($source_image);
		$height       = imagesy($source_image);

		$thumbHeight = floor($height * ($thumbWidth / $width));

		$virtual_image = imagecreatetruecolor($thumbWidth, $thumbHeight);

		imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $thumbWidth, $thumbHeight, $width, $height);
	    
	    imagejpeg($virtual_image, $pathToThumb);

	}


}
