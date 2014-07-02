<?php require_once ROOT.'/views/shared/header.php'; ?>

<section class="innerpage-banner">
	<div class="row">
		<h1 class="page-heading">
			<span class="glyphicon glyphicon-tower"></span>
			<?= $data['pageTitle'] ?> <?= $data['sitename'] ?>
		</h1>

		<h2 class="slogan"><?= $data['slogan'] ?></h2>

	</div>
</section>

<section class="built-in">
	<div class="row">
		<div class="small-12 columns">
			<div class="row">
				<a id="security"></a>
				<div class="small-12 medium-2 columns glyphwrap">
					<span class="glyphicon glyphicon-lock"></span>
				</div>
				<div class="small-12 medium-10 columns">
					<h2>Security</h2>
					<p>Keep your site secure from hack-attacks. We implement the some of the most secure and up to standard code out today. This will keep your site from falling victim to attacks as well as keep it fast and accessible.</p>
				</div>

				<a id="seo"></a>
				<div class="small-12 medium-2 columns glyphwrap">
					<span class="glyphicon glyphicon-list-alt"></span>
				</div>
				<div class="small-12 medium-10 columns">
					<h2>Search Engine Optimization</h2>
					<p>Search Engine Optimization is backed into every site we build. If you want to get found my more people SEO is the key. We keep in touch with the latest standards from Google and Bing to make sure you're reaching the biggest audience possible.</p>
				</div>


				<a id="social"></a>
				<div class="small-12 medium-2 columns glyphwrap">
					<span class="glyphicon glyphicon-comment"></span> 
				</div>
				<div class="small-12 medium-10 columns">
					<h2>Social Media</h2>
					<p>Stay connected with your audience and constituents like never before with integrated social media management. We'll help get you set up and stay connected with the platforms that will help you the most.</p>
				</div>

				<a id="flex"></a>
				<div class="small-12 medium-2 columns glyphwrap">
					<span class="glyphicon glyphicon-th"></span> 
				</div>
				<div class="small-12 medium-10 columns">
					<h2>Flexable Content Managment</h2>
					<p>We'll make sure your site can reach the biggest audience possible by making it as flexible as possible. This means making it responsive to work the best it can on any device it's loaded on.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="home-social">
	<ul class="social-list">
	<?php 
		$links = $data['sociallinks'];
		require_once WIDGETS.'sociallinks-widget.php';
	?>
	</ul>
</section>

<section class="be-block builtin">
	<div class="row">
		<ul class="be-list">
			<?php require_once WIDGETS.'belist-widget.php'; ?>
		</ul>
	</div>
</section>

<?php require_once ROOT.'/views/shared/footer.php'; ?>
