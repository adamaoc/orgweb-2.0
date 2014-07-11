<?php

class Builtin extends Controller
{

	public function index() 
	{
		$site = $this->model('Site');
		$pageDesc = "See what is built into every website built on the ORG-Websites platform; including Security, Search Engine Optimization (SEO), Social Media, Flexable Content Managment (CMS), and Responsive Design for any size screen.";

		$this->view('builtin/index', array(
			'sitename' => $site->sitename,
			'slogan' => "Find out more about what's you get for free built in to ORG-Websites and FlexHub.",
			'title' => 'Built In to ORG Websites',
			'contactPhone' => $site->contactPhone,
			'sociallinks' => $site->sociallinks,
			'pageTitle' => "What's Built Into",
			'pageDesc' => $pageDesc
		));
	}
}