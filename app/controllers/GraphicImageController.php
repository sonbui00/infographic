<?php

class GraphicImageController extends \BaseController {

	const IMG_EN_DIC      = "public/upload/image_en/";
	const IMG_VI_DIC      = "public/upload/image_vi/";
	const IMG_WORD_VI_DIC = "public/upload/image_word_vi/";
	const THUMB           = "public/upload/thumb/";
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$graphics = GraphicImages::paginate(10);
		return View::make('page.homepage', array('title' => "Home", 'graphics' => $graphics));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public static function store($url)
	{
		$roles = array(
				'title'        => 'required',
				'description'  => 'required',
				'link_en'      => 'required|image',
				'link_vi'      => 'required|image',
				'link_word_vi' => 'image',
			);

		$validator = Validator::make(Input::all(), $roles);

		if ($validator->passes()) {
			$infographic = new GraphicImages;
			$infographic->title       = Input::get('title');
			$infographic->description = Input::get('description');
			$infographic->save();
			self::processImages($infographic->id);
			return Redirect::action('AdminController@getNewInfographic');
		} else {
			return dd($validator->messages()->all());
		}
	}

	private static function processImages($id) {
		$image_name = Input::file('link_en')->getClientOriginalName().str_random(8).'.';
		$infographic = GraphicImages::find($id);
		$infographic->link_en      = self::moveImage('link_en', $image_name, self::IMG_EN_DIC);
		$infographic->link_vi      = self::moveImage('link_vi', $image_name, self::IMG_VI_DIC);
		$infographic->link_word_vi = self::moveImage('link_word_vi', $image_name, self::IMG_WORD_VI_DIC);
		$infographic->save();
		//self::getThumbnailImage();
	}

	private static function moveImage($input_name, $image_name, $path) {
		$name = '';
		if (Input::hasFile($input_name)) {
			$name = $image_name.Input::file($input_name)->getClientOriginalExtension();
			Input::file($input_name)->move($path, $name);
		}
		return $name;
	}

	private static function getThumbnailImage() {
		$pathToImages = "E:\\app\\xampp\\htdocs\\infographic\\public\\upload\\image_en\\test.jpg";
		$pathToThumbs = public_path()."/upload/thumb/test.jpg";
		$thumbWidth	= 200;
		Image::createThumbs( $pathToImages, $pathToThumbs, $thumbWidth );
	}


	public static function getThumbnail($graphicImage) {
		return asset(substr(self::THUMB, 7).$graphicImage->link_thumb);
	}

	public static function getLinkEn($graphicImage) {
		return asset(substr(self::IMG_EN_DIC, 7).$graphicImage->link_en);
	}

	public static function getLinkVi($graphicImage) {
		return asset(substr(self::IMG_VI_DIC, 7).$graphicImage->link_vi);
	}

	public static function getLinkWordVi($graphicImage) {
		return asset(substr(self::IMG_WORD_VI_DIC, 7).$graphicImage->link_word_vi);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getShow($id)
	{
		$graphicImage = GraphicImages::find($id);
		return View::make('page.infographic-show')->withGraphic($graphicImage)->withTitle($graphicImage->title);
	}

	public function getFull($id)
	{
		$graphicImage = GraphicImages::find($id);
		$this->getLink($graphicImage);
		return View::make('graphic/view')->withImage($graphicImage);
	}

	private function getLink(& $graphicImage) {
		$graphicImage->link_en = asset(substr(self::IMG_EN_DIC, 7).$graphicImage->link_en);
		$graphicImage->link_vi = asset(substr(self::IMG_VI_DIC, 7).$graphicImage->link_vi);
		$graphicImage->link_word_vi = asset(substr(self::IMG_WORD_VI_DIC, 7).$graphicImage->link_word_vi);

		// In openshift host
		// $graphicImage->link_en = asset(self::IMG_EN_DIC.$graphicImage->link_en);
		// $graphicImage->link_vi = asset(self::IMG_VI_DIC.$graphicImage->link_vi);
		// $graphicImage->link_word_vi = asset(self::IMG_WORD_VI_DIC.$graphicImage->link_word_vi);

	}

	public function getSearch() {
		if (Input::has('search')) {
			$search = Input::get('search');
			$graphics = GraphicImages::where('title', 'LIKE', '%'.$search.'%')->orWhere('description', 'LIKE', '%'.$search.'%')->paginate(10);
			Input::flashOnly('search', 'email');
			return View::make('page.homepage', array('title' => "Search for ".$search, 'graphics' => $graphics));
		} else {
			return Redirect::route('homepage');
		}
		

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}