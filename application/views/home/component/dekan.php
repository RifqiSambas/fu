<h4 class="p-title"><b>POJOK DEKAN</b></h4>
<?php foreach ($dekan as $dekan) { ?>
	<div class="sided-90x mb-20">
		<div class="s-left br-3 oflow-hidden">
			<img src="<?= base_url('assets/uploads/' . $dekan->thumbnail) ?>" alt="<?= $dekan->title ?>">
		</div>

		<div class="s-right">
			<h6>
				<b>
					<?= $dekan->title ?>
				</b>
			</h6>
			<h6 class="color-ash">
				<?= $dekan->author ?>
			</h6>
		</div>
		<!-- s-left -->
	</div>
<?php } ?>
<ul class="font-10 text-center color-white list-block list-a-block list-a-ptb-10 list-li-mb-10 list-a-br-5 list-a-hvr-primary pt-20">
	<li><a class="bg-primary" href="<?= base_url('arsip/dekan') ?>">POJOK DEKAN SELENGKAPNYA</a></li>
</ul>
