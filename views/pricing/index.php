<?php require_once ROOT.'/views/shared/header.php'; ?>

<section class="innerpage-banner">
	<div class="row">
		<h1 class="page-heading">
			<span class="glyphicon glyphicon-tower"></span>
			<?= $data['pageTitle'] ?> <?= $data['sitename'] ?>?
		</h1>

		<h2 class="slogan"><?= $data['slogan'] ?></h2>

	</div>
</section>

<section class="pricing-wrap">

	<div class="row">

		<div class="content small-12 columns">
			<h2>What will it cost to get your website up and running?</h2>
			
			<p>At ORG-Websites we know the sensative nature of the budget for non-profit orginizations. We've laid out a very reasonable level of pricing that starts a low as $100.00 p/m because we know sometimes you just need to be out there.</p>
			
			<p>Check out our pricing lists below and if you have any questions please do not hesitate to shoot us an <a href="/contact/">email</a>.</p>

			<p>Thanks.</p>
		</div>

		<?php foreach ($data['packages'] as $package) : ?>
			<div class="small-12 medium-4 columns">
				<ul class="pricing-table">
					<li class="title"><?= $package['name'] ?></li>
					<li class="price"><?= $package['price'] ?></li>
					<li class="description"><?= $package['desc'] ?></li>
					<?php foreach ($package['bullets'] as $bullet) : ?>
						<li class="bullet-item"><?= $bullet ?></li>
					<?php endforeach; ?>
					<li class="cta-button"><a class="button" href="/pricing/package/<?= strtolower($package['name']) ?>/">Learn More</a></li>
				</ul>
			</div>
		<?php endforeach; ?>
	</div>


	<section class="enticement">
		<div class="row">
			<?php require_once WIDGETS.'enticements-widget.php'; ?>
		</div>
	</section>

	<section class="home-social">
		<h4 class="text-center">Check us out on Social Media</h4>
		<ul class="social-list">
		<?php 
			$links = $data['sociallinks'];
			require_once WIDGETS.'sociallinks-widget.php';
		?>
		</ul>
	</section>
</section>

<?php require_once ROOT.'/views/shared/footer.php'; ?>
