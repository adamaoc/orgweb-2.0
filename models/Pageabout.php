<?php


class Pageabout
{
	public $pageTitle = '';
	public $content = '';
	public $data = '';
	protected $api = 'http://flexhub.ampnetmedia.com/api/org-websites/api/get_page/?slug=about';

	public function __construct() {
		$this->setAPI();
		$this->setTitle();
		$this->content = $this->setContent();
	}

	public function setAPI() {
		$api = $this->api;
		$this->data = json_decode(file_get_contents($api));
		return $this->data;
	}

	public function setTitle() {
		$title = $this->data->page->title;
		$this->pageTitle = $title;
		return $this->pageTitle;
	}

	public function setContent() {
		$content = $this->data->page->content;
		return $content;
	}
}