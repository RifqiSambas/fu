<style>
	.para p {
		text-align: justify
	}
</style>
<h4 class="p-title"><b>BERITA TERBARU</b></h4>
<?php foreach ($data as $data) { ?>
	<div class="para row mb-2">
		<div class="col-sm-6">
			<img src="<?= base_url('assets/uploads/' . $data->thumbnail) ?>" alt="<?= $data->thumbnail ?>" />
		</div>

		<div class="col-sm-6">
			<h4 class="mt-30">
				<a href="#">
					<b>
						<?= $data->title ?>
					</b>
				</a>
			</h4>
			<ul class="mtb-10 list-li-mr-5 color-lite-black">
				<li>
					<i class="mr-5 font-12 ion-clock"></i>
					<?= $data->date ?>
				</li>
				<li>
					<i class="mr-5 font-12 ion-android-person"></i>
					<?= $data->author ?>
				</li>
			</ul>
			<p>

				<?= $data->description ?>
			</p>
		</div>
	</div>
<?php } ?>
<div class="row">
	<div class="col">
		<ul class="font-10 text-center color-white list-block list-a-block list-a-ptb-10 list-li-mb-10 list-a-br-5 list-a-hvr-primary pt-20">
			<li><a class="bg-primary" href="<?= base_url('arsip/berita') ?>">BERITA SELENGKAPNYA</a></li>
		</ul>
	</div>
</div>
