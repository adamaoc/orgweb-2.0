<?php


class PricingModel
{
	public $package = '';
	public $name = '';
	public $price = '';
	public $desc = '';
	public $bullets = array();
	public $pageContent = '';


	public function getDetails($package)
	{
		if($package == 'standard')
		{
			$this->StandardPrice();
		}
		elseif ($package == 'premium')
		{
			$this->PremiumPrice();
		}
		elseif ($package == 'platinum')
		{
			$this->PlatinumPrice();
		}
	}

	public function getAll() 
	{
		$api = "http://flexhub.ampnetmedia.com/api/org-websites/api/get_category_posts/?slug=pricing&order=asc";

		$data = json_decode(file_get_contents($api));

		$packages = array();
		foreach ($data->posts as $post) {
			$packages[$post->slug] = array(
				'name' => $post->title,
				'price' => $post->custom_fields->price[0],
				'desc' => $post->excerpt,
				'bullets' => $post->custom_fields->bullets
			);
		}

		return $packages;
	}

	public function StandardPrice() 
	{
		$api = "http://flexhub.ampnetmedia.com/api/org-websites/api/get_post/?slug=standard";

		$data = json_decode(file_get_contents($api));

		$this->setValues($data->post);
	}

	public function PremiumPrice() 
	{
		$api = "http://flexhub.ampnetmedia.com/api/org-websites/api/get_post/?slug=premium";

		$data = json_decode(file_get_contents($api));

		$this->setValues($data->post);

	}

	public function PlatinumPrice() 
	{
		$api = "http://flexhub.ampnetmedia.com/api/org-websites/api/get_post/?slug=platinum";

		$data = json_decode(file_get_contents($api));

		$this->setValues($data->post);

	}

	public function setValues($data)
	{
		$this->name = $data->title;
		$this->price = $data->custom_fields->price[0];
		$this->desc = $data->excerpt;
		$this->bullets = $data->custom_fields->bullets;

		$this->pageContent = $data->content;
	}
}