	<h4 class="p-title"><b>KONTEN LAINNYA</b></h4>

	<?php foreach ($recent as $recent) { ?>
		<div id="<?= $recent->id ?>" class="sided-80x mb-20">
			<div class="s-left">
				<img src="<?= base_url('assets/uploads/' . $recent->thumbnail) ?>" alt="<?= $recent->thumbnail ?>" />
			</div>
			<!-- s-left -->
			<div class="s-right">
				<h5>
					<a href="<?= base_url('/konten/view' . $recent->id) ?>">
						<b><?= $recent->title ?></b></a>
				</h5>
				<ul class="mtb-5 list-li-mr-20 color-lite-black">
					<li><i class="mr-5 font-12 ion-clock"></i><?= $recent->date ?></li>
					<li><i class="mr-5 font-12 ion-eye"></i><?= $recent->author ?></li>
				</ul>
			</div>
		</div>
	<?php } ?>
