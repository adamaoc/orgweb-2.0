<?php

class Sitemap extends Controller 
{
	public $pages = "";

	public function __construct() 
	{
		$data = scandir('controllers/');

		unset($data[0]);
		unset($data[1]);

		$pages = array();
		foreach ($data as $single) {

			$page = explode('.', $single);
			
			if($page[0] != "sitemap") {
				$pages[] = $page[0];
				if($page[0] == "pricing") {
					$internals = $this->getInternalsPricing('PricingModel');
					$pages[] = $internals;
				}
				if($page[0] == "works") {
					$internals = $this->getInternalsWorks('Pageworks');
					$pages[] = $internals;
				}
			} 
		}
		// print_r($pages);
		$this->pages = $pages;
	}

	public function index() 
	{
		$site = $this->model('Site');
		$pages = $this->pages;

		$this->view('sitemap/index', array(
			'sitename' => $site->sitename,
			'slogan' => $site->slogan,
			'title' => 'Sitemap ORG-Websites',
			'sociallinks' => $site->sociallinks,
			'pages' => $pages
		));
	}

	public function xml()
	{
		$pages = $this->pages;
		$this->view('sitemap/xml', array(
			'pages' => $pages
		));
	}

	protected function getInternalsPricing($model) 
	{
		$url = "models/".$model.".php";

		require_once $url;
		$pricing = new PricingModel;
		$packages = $pricing->getAll();

		$packagearr = array();

		foreach ($packages as $slug => $package) {
			$packagearr[$slug] = array(
				"url" => "/pricing/package/".$slug,
				"name" => $package['name']
			);
		}

		return $packagearr;
	}

	protected function getInternalsWorks($model)
	{
		$url = "models/".$model.".php";

		require_once $url;
		$worksmodel = new Pageworks;
		$works = $worksmodel->getList();

		$worksarr = array();

		foreach ($works as $slug => $work) {
			$worksarr[$slug] = array(
				"url" => "/works/".$slug,
				"name" => $work['title']
			);
		}

		return $worksarr;
	}
}