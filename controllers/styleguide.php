<?php

class Styleguide extends Controller 
{
	public function index() 
	{
		$site = $this->model('Site');

		$this->view('styleguide/index', array(
			'sitename' => $site->sitename,
			'slogan' => $site->slogan,
			'title' => 'Styleguide ORG-Websites',
			'sociallinks' => $site->sociallinks
		));
	}
}