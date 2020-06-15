<h4 class="p-title">
	<b>
		<a href="<?= base_url('kegiatan') ?>">
			KEGIATAN
		</a>
	</b>
</h4>
<div class="row">
	<div class="col-sm-12 col-lg-12">
		<?php foreach ($kegiatan as $pengumuman) { ?>
			<div class="brdr-l-grey-2 pl-20 mb-30">
				<h5>
					<a href="<?= base_url('kegiatan/detail/' . $pengumuman->id) ?>">
						<b>
							<?= $kegiatan->title ?>
						</b>
					</a>
				</h5>
				<ul class="mtb-5 list-li-mr-20 color-lite-black">
					<li>
						<i class="mr-5 font-12 ion-clock"></i>
						<?= $kegiatan->date ?>
					</li>
				</ul>
			</div>
		<?php } ?>
	</div>
</div>
