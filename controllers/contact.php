<?php

class Contact extends Controller 
{
	public function index() 
	{
		$site = $this->model('Site');
		$page = $this->model('Pagecontact');
		$aboutpage = $this->model('Pageabout');

		$this->view('contact/index', array(
			'sitename' => $site->sitename,
			'slogan' => $site->slogan,
			'title' => 'Contact Us',
			'contactPhone' => $site->contactPhone,
			'pageTitle' => $page->pageTitle,
			'contactContent' => $page->ContactContent,
			'aboutContent' => $aboutpage->content,
			'sociallinks' => $site->sociallinks
		));
	}
}