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

<section class="aboutpage">
	<div class="row">
		<div class="img-wrap small-12 medium-4 columns content-thumb">
			<span class="th">
				<img src="http://ampnetmedia.com/assets/img/home-banner.jpg" alt="<?= $data['slogan'] ?>" />
			</span>
		</div>
		<div class="details small-12 medium-8 columns">
			<h2>Who we are:</h2>
			<?= $data['content'] ?>

			<h3>Reach out to us through social media</h3>
			<ul class="social-list-left">
			<?php 
				$links = $data['sociallinks'];
				require_once WIDGETS.'sociallinks-widget.php';
			?>
			</ul>
		</div>
	</div>
</section>


<section class="enticement">
	<div class="row">
		<?php require_once WIDGETS.'enticements-widget.php'; ?>
	</div>
</section>

<?php require_once ROOT.'/views/shared/footer.php'; ?>
