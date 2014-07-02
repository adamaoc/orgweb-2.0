<?php

class Pagesingle
{
	public $pageTitle = "";	
	public $pageImage = "";	
	public $pageContent = "";
	public $pageTechs = "";
	public $galleryPics = "";

	public function getPost($slug)
	{
		$api = 'http://flexhub.ampnetmedia.com/api/org-websites/api/get_post/?slug='.$slug;
		$data = json_decode(file_get_contents($api));

		if($data->status == "error")
		{
			header('Location: '.$host.'/works/');
			exit;
		} 
		else 
		{
			$this->pageTitle = $data->post->title;
			$this->pageContent = $data->post->content;
			$this->pageImage = $data->post->thumbnail_images->medium->url;
			$this->pageTechs = $data->post->tags;
			$this->galleryPics = $data->post->attachments;
		}
		
	}

}