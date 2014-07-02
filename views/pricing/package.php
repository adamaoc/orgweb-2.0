<?php require_once ROOT.'/views/shared/header.php'; ?>

<section class="pricing-wrap">

	<div class="row">

		<div class="small-12 columns">
			<h1><?= $data['packageName'] ?> Pricing Package</h1>
		</div>

		<div class="small-12 medium-4 columns">
			<ul class="pricing-table">
				<li class="title"><?= $data['packageName'] ?></li>
				<li class="price"><?= $data['packagePrice'] ?></li>
				<li class="description"><?= $data['packageDesc'] ?></li>
				<?php foreach ($data['packageBullets'] as $bullet) : ?>
					<li class="bullet-item"><?= $bullet ?></li>
				<?php endforeach; ?>
			</ul>

			<a href="/pricing/" class="button">&laquo; More pricing options</a>
		</div>
		<div class="small-12 medium-8 columns">
			<?= $data['pageContent']; ?>
		</div>

	</div>

</section>

<?php require_once ROOT.'/views/shared/footer.php'; ?>
