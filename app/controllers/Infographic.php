<?php
class Infographic extends Controller {

	const IMG_EN_DIC = "public/upload/image_en/";
	const IMG_VI_DIC = "public/upload/image_vi/";
	const IMG_WORD_VI_DIC = "public/upload/image_word_vi/";

	public function getPost() {
		return View::make('post/infographic')->withTitle('Post');
	}

	public function postForm() {

		$title = Input::get('title');
		$description = Input::get('description');

		$image_name = Input::file('image_en')->getClientOriginalName().str_random(8).'.';

		$infographic = new GraphicImages;
		$infographic->title = $title;
		$infographic->description = $description;
		$infographic->link_en = $this->moveImage('image_en', $image_name, self::IMG_EN_DIC);
		$infographic->link_vi = $this->moveImage('image_vi', $image_name, self::IMG_VI_DIC);
		$infographic->link_word_vi = $this->moveImage('image_word_vi', $image_name, self::IMG_WORD_VI_DIC);

		$infographic->save();

		
		// if (Input::hasFile('image_en')) {
		// 	Input::file('image_en')->move(self::IMG_EN_DIC, $image_name.Input::file('image_en')->getClientOriginalExtension());
		// }
		// if (Input::hasFile('image_vi')) {
		// 	Input::file('image_vi')->move(self::IMG_VI_DIC, $image_name).Input::file('image_vi')->getClientOriginalExtension();
		// }
		// if (Input::hasFile('image_word_vi')) {
		// 	Input::file('image_word_vi')->move(self::IMG_WORD_VI_DIC, $image_name).Input::file('image_word_vi')->getClientOriginalExtension();
		// }

		return Redirect::route('homepage');
	}

	private function moveImage($input_name, $image_name, $path) {
		$name = '';
		if (Input::hasFile($input_name)) {
			$name = $image_name.Input::file($input_name)->getClientOriginalExtension();
			Input::file($input_name)->move($path, $name);
		}
		return $name;
	}


	public function getView($id) {
		$graphicImage = GraphicImages::find($id);
		$this->getLink($graphicImage);
		return View::make('graphic/view')->withImage($graphicImage);
	}

	private function getLink(& $graphicImage) {
		// $graphicImage->link_en = asset(substr(self::IMG_EN_DIC, 7).$graphicImage->link_en);
		// $graphicImage->link_vi = asset(substr(self::IMG_VI_DIC, 7).$graphicImage->link_vi);
		// $graphicImage->link_word_vi = asset(substr(self::IMG_WORD_VI_DIC, 7).$graphicImage->link_word_vi);

		// In openshift host
		$graphicImage->link_en = self::IMG_EN_DIC.$graphicImage->link_en;
		$graphicImage->link_vi = self::IMG_VI_DIC.$graphicImage->link_vi;
		$graphicImage->link_word_vi = self::IMG_WORD_VI_DIC.$graphicImage->link_word_vi;

	}

}