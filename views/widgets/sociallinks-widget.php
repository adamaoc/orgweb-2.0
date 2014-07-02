
<?php foreach ($links as $name => $link) : ?>
	<li class="social-listed <?= $name ?>">
		<a href="<?= $link ?>" target="_blank" class="social-listed-link">
			<span><?= $name ?></span>
			<svg class="icon"><use xlink:href="#<?= $name ?>" /></svg>
		</a>
	</li>
<?php endforeach; ?>