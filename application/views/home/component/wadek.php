<h4 class="p-title"><b>POJOK WAKIL DEKAN</b></h4>
<?php foreach ($wadek as $wadek) { ?>
	<div class="sided-90x mb-20">
		<div class="s-left br-3 oflow-hidden">
			<img src="<?= base_url('assets/uploads/' . $wadek->thumbnail) ?>" alt="<?= $wadek->title ?>">
		</div>

		<div class="s-right">
			<h6>
				<a href="<?= base_url('konten/detail/' . $wadek->topic . '/' . $wadek->id) ?>">
					<?= $wadek->title ?>
				</a>
			</h6>
			<h6 class="color-ash">
				<?= $wadek->author ?>
			</h6>
		</div>
		<!-- s-left -->
	</div>
<?php } ?>
<ul class="font-10 text-center color-white list-block list-a-block list-a-ptb-10 list-li-mb-10 list-a-br-5 list-a-hvr-primary pt-20">
	<li><a class="bg-primary" href="<?= base_url('arsip/wadek') ?>">POJOK WAKIL DEKAN SELENGKAPNYA</a></li>
</ul>
