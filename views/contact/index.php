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

<section class="contactpage">
	<div class="row">
		<div class="details small-12 medium-7 columns">
			<h2><?= $data['contactPhone'] ?></h2>
			<p><?= $data['contactContent'] ?></p>
		</div>
		<div class="form-wrapper small-12 medium-5 columns">
			<?php require_once WIDGETS."contactform-widget.php"; ?>
		</div>
	</div>
	<h3 class="text-center">Or contact us on social media!</h3>
	<ul class="social-list">
	<?php 
		$links = $data['sociallinks'];
		require_once WIDGETS.'sociallinks-widget.php';
	?>
	</ul>
</section>


<section class="home-about">
	<div class="row">
		<h2 class="small-12 columns">About <?= $data['sitename'] ?></h2>
		<artilce class="small-12 medium-8 columns">
			<?= $data['aboutContent'] ?>
		</artilce>
		<div class="icon-wrap small-12 medium-4 columns">
			<span class="glyphicon glyphicon-globe"></span>
		</div>
	</div>
</section>

<?php require_once ROOT.'/views/shared/footer.php'; ?>
