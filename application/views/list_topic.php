<style>
	p {
		text-align: justify
	}
</style>
<?php foreach ($data as $data) { ?>
	<div id="<?= $data->id ?>" class="mb-30 sided-250x s-lg-height card-view">
		<div class="s-left">
			<img src="<?= base_url('assets/uploads/' . $data->thumbnail) ?>" alt="<?= $data->thumbnail ?>" />
		</div><!-- left-area -->
		<div class="s-right ptb-30 pt-sm-20 pb-xs-5 plr-30 plr-xs-0">
			<h4>
				<a href="<?= base_url('konten/detail/' . $data->topic . '/' . $data->id) ?>">
					<?= $data->title ?>
				</a>
			</h4>
			<ul class="mtb-10 list-li-mr-20 color-lite-black">
				<li>
					<i class="mr-5 font-12 ion-clock"></i>
					<?= $data->date ?>
				</li>
				<li>
					<i class="mr-5 font-12 ion-android-person"></i>
					<?= $data->author ?>
				</li>
			</ul>
			<p class="mt-10">
				<?= $data->description ?>
			</p>
		</div><!-- right-area -->
	</div><!-- sided-250x -->
<?php } ?>

<ul class="pagination mb-30">
	<?php for ($i = 1; $i <= ($jumlah / 4); $i++) { ?>
		<?php if ($i == $part) { ?>
			<li class='active'>
				<a href='<?= base_url('arsip/' . $topic . '/' . $i) ?>'><?= $i ?></a>
			</li>
		<?php } else { ?>
			<li>
				<a href='<?= base_url('arsip/' . $topic . '/' . $i) ?>'><?= $i ?></a>
			</li>
		<?php } ?>
	<?php } ?>
</ul>
