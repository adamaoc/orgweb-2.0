<?php

class Pricing extends Controller 
{
	public function index() 
	{
		$site = $this->model('Site');
		$model = $this->model('PricingModel');
		$packages = $model->getAll();

		$this->view('pricing/index', array(
			'sitename' => $site->sitename,
			'slogan' => $site->slogan,
			'title' => 'Pricing Page',
			'pageTitle' => 'What will it cost to get your site up and running with',
			'contactPhone' => $site->contactPhone,
			'sociallinks' => $site->sociallinks,
			'packages' => $packages
		));
	}

	public function package($package = '')
	{
		$site = $this->model('Site');
		$model = $this->model('PricingModel');
		$model->getDetails($package);

		$this->view('pricing/package', array(
			'sitename' => $site->sitename,
			'slogan' => $site->slogan,
			'title' => 'Standard Pricing Page',
			'contactPhone' => $site->contactPhone,
			'sociallinks' => $site->sociallinks,
			'pageContent' => $model->pageContent,
			'packagePrice' => $model->price,
			'packageDesc' => $model->desc,
			'packageName' => $model->name,
			'packageBullets' => $model->bullets
		));	
	}
}