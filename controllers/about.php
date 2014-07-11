<?php

class About extends Controller 
{
	public function index() 
	{
		$site = $this->model('Site');
		$page = $this->model('Pageabout');
		$pageDesc = strip_tags($page->content)." Serving nonprofits";

		$this->view('about/index', array(
			'sitename' => $site->sitename,
			'slogan' => $site->slogan,
			'title' => 'About ORG-Websites',
			'pageTitle' => $page->pageTitle,
			'content' => $page->content,
			'sociallinks' => $site->sociallinks,
			'pageDesc' => $pageDesc
		));
	}
}