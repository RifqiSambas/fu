<h4 class="p-title in">
	<b>
		<a href="<?= base_url('publikasi/buku') ?>" align=" right" class="text-right">
			BUKU
	</b>
	</a>
</h4>

<div class="row mb-20">
	<?php foreach ($buku as $buku) { ?>
		<div class="mt-20 col-sm-6 col-md-3">
			<a class="hover-grey dplay-block" href="#">
				<div align="center" class="pos-relative">
					<img align="center" src="<?= base_url('assets/uploads/' . $buku->thumbnail) ?>" alt="" />
					<h5 class="mt-20 ">
						<b>
							<?= $buku->title ?>
						</b>
					</h5>
					<h6>
						<?= $buku->author ?>
					</h6>
				</div>
			</a>
		</div>
	<?php } ?>
</div>
