<?php

class Pageworks 
{
	public $pageTitle = "Portfolio";
	public $pageSlogan = "This is a clever slogan for the portfolio page!";
	public $pageContent = "Here is some standard text for the portfolio page.";

	public $workslistarr = array();

	public function getList()
	{
		$api = 'http://flexhub.ampnetmedia.com/api/org-websites/api/get_category_posts/?slug=works';
		
		$data = json_decode(file_get_contents($api));

		$buildarr = array();

		foreach ($data->posts as $post) {
			foreach ($post->tags as $tag) {
				$title = $tag->title;
				$tagarr[] = $title;
			};

			$buildarr[$post->slug] = array(
				"title" => $post->title,
				"date" => $post->modified,
				"image" => $post->thumbnail_images->medium->url,
				"snip" => $post->excerpt,
				"techs" => $tagarr
			);  
		}

		$this->workslistarr = $buildarr;
	}
}
