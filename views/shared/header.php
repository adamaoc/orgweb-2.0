<?php 
$pageURL = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
$currentPage = $pageURL[0];
?>
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<title>ORG-Websites <?= $data['title'] ?> | Websites for non-profit foundations and orginizations.</title>

		<meta name="google-site-verification" content="GWEBMASTER" />
		
		<link rel="stylesheet" href="<?= ASSETS ?>css/app.css" />
		<?php if($currentPage == "styleguide") : ?>
			<link rel="stylesheet" href="<?= ASSETS ?>css/styleguid.css" />
		<?php endif; ?>
		<script src="<?= ASSETS ?>js/modernizr.min.js"></script>
	</head>
	<body>
<?php require_once "svg-iconset.php"; ?>
<nav class="site-nav">
	<span class="mobi-menu">Menu</span>
	<section class="row menu-row">
		<!-- Left Nav Section -->
	    <ul class="site-left-nav">
	      <li><a href="/">Home</a></li>
	      <li><a href="/contact/">Contact</a></li>
	      <li><a href="/about/">About</a></li>
	    </ul>

	    <div class="site-logo">
	    	<span class="glyphicon glyphicon-tower"></span>
	    </div>

	    <!-- Right Nav Section -->
	    <ul class="site-right-nav">
	      <li><a href="/pricing/">Pricing</a></li>
	      <li><a href="/works/">Works</a></li>
	      <li><a href="/builtin/">Built In</a></li>
	    </ul>
	</section>
</nav>
