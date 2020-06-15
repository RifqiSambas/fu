<style>
	.rec {
		font-size: 12px
	}
</style>

<h4 class="p-title"><b>KONTEN LAINNYA</b></h4>

<?php foreach ($recent as $recent) { ?>
	<div id="<?= $recent->id ?>" class="sided-80x mtb-30">
		<div class="s-left">
			<img style="max-height:80px; max-width:auto" src="<?= base_url('assets/uploads/' . $recent->thumbnail) ?>" alt="<?= $recent->thumbnail ?>" />
		</div>
		<!-- s-left -->
		<div class="s-right">
			<h6>
				<a href="<?= base_url('/konten/detail/' . $recent->topic . '/' . $recent->id) ?>">
					<b><?= $recent->title ?></b></a>
			</h6>
			<ul class="mtb-5 list-li-mr-20 color-lite-black">
				<li class="rec"><i class="mr-5 font-12 ion-clock"></i><?= $recent->date ?></li>
				<li class="rec"><i class="mr-5 font-12 ion-android-person"></i><?= $recent->author ?></li>
			</ul>
		</div>
	</div>
<?php } ?>
