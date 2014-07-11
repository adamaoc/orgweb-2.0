<?php

class Pricing extends Controller 
{
	public function index() 
	{
		$site = $this->model('Site');
		$model = $this->model('PricingModel');
		$packages = $model->getAll();

		$pageDesc = "At ORG-Websites we know the sensative nature of the budget for non-profit orginizations. We've laid out a very reasonable level of pricing that starts a low as $100.00 p/m because we know sometimes you just need to be out there.";

		$this->view('pricing/index', array(
			'sitename' => $site->sitename,
			'slogan' => $site->slogan,
			'title' => 'Pricing Page',
			'pageTitle' => 'What will it cost to get your site up and running with',
			'contactPhone' => $site->contactPhone,
			'sociallinks' => $site->sociallinks,
			'packages' => $packages,
			'pageDesc' => $pageDesc
		));
	}

	public function package($package = '')
	{
		$site = $this->model('Site');
		$model = $this->model('PricingModel');
		$model->getDetails($package);

		$pageDesc = strip_tags($model->price)." | ".strip_tags($model->name)." | ".strip_tags($model->desc)." ".$site->slogan;

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
			'packageBullets' => $model->bullets,
			'pageDesc' => $pageDesc
		));	
	}
}