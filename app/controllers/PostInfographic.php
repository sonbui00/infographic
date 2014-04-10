<?php
class PostInfographic extends Controller {
	public function getPost() {
		return View::make('post/infographic')->withTitle('Post');
	}

	public function postForm() {
		return "Hello";
	}
}