<?php
header('Content-type: text/xml'); 

function sitemapBuilder($pages) {

	$baseurl = ASSETS;

	$xmlblock = "";

	$xmlblock .= '<?xml version="1.0" encoding="utf-8"?>
	<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

	foreach ($pages as $page) {
		if(is_array($page)) {
			foreach ($page as $internal) {
				$xmlblock .= "<url>
						<loc>".$baseurl.$internal['url']."</loc>
						<lastmod>".date('Y-m-d')."</lastmod>
						<changefreq>monthly</changefreq>
						<priority>1</priority>
					</url>";
			}
		}else{
			$xmlblock .= "<url>
				<loc>".$baseurl.$page."</loc>
				<lastmod>".date('Y-m-d')."</lastmod>
				<changefreq>monthly</changefreq>
				<priority>1</priority>
			</url>";
		}
	}

	$xmlblock .= '</urlset>';
	return $xmlblock;
}

$sitemap = sitemapBuilder($data['pages']);

echo $sitemap;



