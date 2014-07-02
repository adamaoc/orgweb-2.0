<?php require_once ROOT.'/views/shared/header.php'; ?>

<section class="work-wrap">
	<div class="row">

		<h1><?= $data['pageTitle'] ?></h1>

		<div class="img-wrap small-12 medium-4 columns">
			<img src="<?= $data['pageImage'] ?>" alt="<?= $data['pageTitle'] ?>" />
		</div>

		<article class="details">
			<?= $data['pageContent'] ?>
			<h5>Tech Used:</h5>
			<p>
			<?php foreach ($data['techs'] as $tech) : ?>
			
				<span><?= $tech->title ?></span>
				
			<?php endforeach; ?>
			</p>

			<div class="gallery">
				<ul class="clearing-thumbs" data-clearing>
				<?php 
				// print_r($data['galleryPics']);
				foreach ($data['galleryPics'] as $pic) : ?>
					<li>
						<a href="<?= $pic->images->full->url ?>" class="th">
							<img src="<?= $pic->images->thumbnail->url ?>" alt="<?= $pic->title ?>" />
						</a>
					</li>
				<?php endforeach; ?>
				</ul>
			</div>

			<p class="backlink">
				<a href="/works/">&laquo; back to all works</a>
			</p>

		</article>
</section>

<?php require_once ROOT.'/views/shared/footer.php'; ?>