<?php ?>
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<title>ORG-Websites <?= $data['title'] ?> | Websites for non-profit foundations and orginizations.</title>

		<link rel="stylesheet" href="<?= ASSETS ?>css/app.css" />
		<script src="<?= ASSETS ?>bower_components/modernizr/modernizr.js"></script>
	</head>
	<body>
<?php require_once "svg-iconset.php"; ?>
<nav class="site-nav">
	<section class="row">
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
