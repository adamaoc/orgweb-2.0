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

<?= $data['pageConent'] ?>

<section class="workslist row">
	<?php 
	$works = $data['workslist'];
	foreach ($works as $key => $work) : ?>
	<article class="small-12 columns">
		<a href="/works/<?= $key ?>" class="row">
			<div class="img-wrap small-12 medium-4 columns">
				<img src="<?= $work['image'] ?>" class="" alt="<?= $work['title'] ?>" />
				<h5>Techs:</h5>
				<?php foreach ($work['techs'] as $tech) : ?>
					<span><?= $tech ?>,</span>
				<?php endforeach; ?>
			</div>
			<div class="details small-12 medium-8 columns">
				<h3><?= $work['title'] ?></h3>
				<span class="datetime"><?= $work['date'] ?></span>
				<?= $work['snip'] ?>
			</div>
		</a>
	</article>
	<?php endforeach; ?>
	<article class="small-12 columns pricing-row">
		<a href="/pricing/" class="row">
			<div class="img-wrap small-12 medium-2 columns">
				<span class="glyphicon glyphicon-globe"></span>
			</div>
			<div class="details small-12 medium-10 columns">
				<h3>Learn more about our princing</h3>
				<p>Interested in what ORG-Websites can do for your non-profit and what to learn more about our pricing? Just check out our pricing section here!</p>
			</div>
		</a>
	</article>
</section>

<h3 class="text-center">Reach out to us through social media</h3>
<ul class="social-list">
<?php 
	$links = $data['sociallinks'];
	require_once WIDGETS.'sociallinks-widget.php';
?>
</ul>

<?php require_once ROOT.'/views/shared/footer.php'; ?>
