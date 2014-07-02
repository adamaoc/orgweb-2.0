<?php require_once ROOT.'/views/shared/header.php'; ?>

<section class="home-banner">
	<div class="row">
		<h1 class="site-heading">
			<span class="glyphicon glyphicon-tower"></span>
			<?= $data['sitename'] ?>
		</h1>

		<h2 class="slogan"><?= $data['slogan'] ?></h2>

	</div>
</section>

<section class="enticement">
	<div class="row">
		<?php require_once WIDGETS.'enticements-widget.php'; ?>
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

<section class="be-block">
	<div class="row">
		<ul class="be-list">
			<?php require_once WIDGETS.'belist-widget.php'; ?>
		</ul>
	</div>
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

<section class="home-contact">
	<div class="row">
		<article class="small-12 medium-6 columns">
			<h2><?= $data['contacttitle'] ?> <?= $data['sitename'] ?></h2>
			<h3><?= $data['contactPhone'] ?></h3>
			<p><?= $data['contactcontent'] ?></p>
		</article>
		<div class="form-wrap small-12 medium-6 columns">
			<?php require_once WIDGETS."contactform-widget.php"; ?>
		</div>
	</div>
</section>

<?php require_once ROOT.'/views/shared/footer.php'; ?>
