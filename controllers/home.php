<?php

class Home extends Controller 
{
	public function index() 
	{
		$site = $this->model('Site');
		$aboutpage = $this->model('Pageabout');
		$contactpage = $this->model('Pagecontact');

		$pageDesc = strip_tags($aboutpage->excerpt);

		$this->view('home/index', array(
			'sitename' => $site->sitename,
			'slogan' => $site->slogan,
			'title' => 'Home Page',
			'aboutContent' => $aboutpage->content,
			'contactPhone' => $site->contactPhone,
			'contacttitle' => $contactpage->pageTitle,
			'contactcontent' => $contactpage->ContactContent,
			'sociallinks' => $site->sociallinks,
			'pageDesc' => $pageDesc
		));
	}
}