<h4 class="p-title"><b>ARTIKEL ALUMNI</b></h4>
<?php foreach ($alumni as $alumni) { ?>
	<div class="sided-90x mb-20">
		<div class="s-left br-3 oflow-hidden">
			<img src="<?= base_url('assets/uploads/' . $alumni->thumbnail) ?>" alt="<?= $alumni->title ?>">
		</div>

		<div class="s-right">
			<h6>
				<a href="<?= base_url($alumni->category . '/' . $alumni->topic . '/') ?>">
					<b>
						<?= $alumni->title ?>
					</b>
				</a>
			</h6>
			<h6 class="color-ash">
				<?= $alumni->author ?>
			</h6>
		</div>
		<!-- s-left -->
	</div>
<?php } ?>
<ul class="font-10 text-center color-white list-block list-a-block list-a-ptb-10 list-li-mb-10 list-a-br-5 list-a-hvr-primary pt-20">
	<li><a class="bg-primary" href="<?= base_url('arsip/alumni') ?>">ARTIKEL ALUMNI SELENGKAPNYA</a></li>
</ul>
