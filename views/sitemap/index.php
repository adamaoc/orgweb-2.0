<?php require_once ROOT.'/views/shared/header.php'; ?>
<section class="sitemap-wrap">
	<div class="row">
		<div class="small-12 medium-4">
			<h3>Pages</h3>
			<ul>
			<?php foreach ($data['pages'] as $page) : 
				if(is_array($page)) { ?>
					<ul>
						<?php foreach ($page as $internal) : ?>
							<li>
								<a href="/<?= $internal['url'] ?>/">
									<?= $internal['name'] ?>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php }else{ ?>
				<li>
					<a href="/<?= $page ?>/"><?php echo ucfirst($page); ?> Page</a>
				</li>
			<?php }
			endforeach; ?>
			</ul>
		</div>
	</div>
</section>

<?php require_once ROOT.'/views/shared/footer.php'; ?>
