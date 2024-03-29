<?= (WP_DEBUG) ? '<!-- BEGIN: [ ' . basename(__FILE__) . ' ]   -->' : '';
	$lists = get_field('list');
?>
<?php if ($lists) : ?>
	<div class="block wrapper">
		<?php foreach ($lists as $k => $list): ?>
			<div class="content--card <?= ($k % 2 == 0)? 'even' : 'odd';?>" id="card--<?=$k;?>" data-aos="fade-down">
				<?php if ($list['image']) : ?>
					<div class="card--img" data-aos="zoom-in" data-aos-delay="500" data-aos-anchor="#card--<?=$k;?>">
						<?= wptht_get_img_html($list['image'], 'card-image'); ?>
					</div>
				<?php endif; ?>
				<div class="card--text">
					<?php if ($list['title']) : ?>
						<div class="card--title">
							<?= $list['title']; ?>
						</div>
					<?php endif; ?>
					<?php if ($list['description']) : ?>
						<div class="card--desc">
							<p><?= $list['description']; ?></p>
							<?php if ($list['cta']) : ?>
								<?= wptht_get_cta_html($list['cta'], 'cta cta__a'); ?>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
<?php endif; ?>
<?= (WP_DEBUG) ? '<!-- END: [ ' . basename(__FILE__) . ' ]   -->' : ''; ?>