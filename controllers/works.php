<?php

class Works extends Controller 
{
	public function index($singlework = "") 
	{
		$site = $this->model('Site');
		$page = $this->model('Pageworks');
		$page->getList();

		if (!empty($singlework)) 
		{
			$this->work($singlework);
		}
		else
		{

			$pageDesc = "Check out some of the work we've done for nonprofits around the US built on our FlexHub platform.";

			$this->view('works/index', array(
				'sitename' => $site->sitename,
				'slogan' => $page->pageSlogan,
				'pageTitle' => $page->pageTitle,
				'pageContent' => $page->pageContent,
				'title' => 'Portfolio for ORG-Websites',
				'sociallinks' => $site->sociallinks,
				'workslist' => $page->workslistarr,
				'pageDesc' => $pageDesc
			));
		}
	}

	public function work($work = '') 
	{
		$site = $this->model('Site');
		$single = $this->model('Pagesingle');
		$post = $single->getPost($work);
		$pageDesc = strip_tags($single->pageExcerpt);

		$this->view('works/single-work', array(
			'title' => $single->pageTitle,
			'pageTitle' => $single->pageTitle,
			'pageContent' => $single->pageContent,
			'pageImage' => $single->pageImage,
			'techs' => $single->pageTechs,
			'galleryPics' => $single->galleryPics,
			'pageDesc' => $pageDesc
		));
	}
}