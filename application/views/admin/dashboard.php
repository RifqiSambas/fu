<?php foreach ($menu as $keyname => $item) { ?>
	<div class="col-md-4 col-lg-4">
		<div class="mb-30 p-30 ptb-sm-25 plr-sm-15 card-view">
			<a data-toggle="collapse" data-target="#<?= $keyname ?>">
				<h4 class="color-primary p-title"><b><?= strtoupper($keyname) ?></b></h4>
			</a>
			<div class="row collapse" id="<?= $keyname ?>">
				<div class="col-sm-12 col-lg-12">
					<?php foreach ($item as $menuitem) { ?>
						<div class="brdr-l-grey-2 pl-20 mb-30">
							<h5>
								<a href="#"><b><?= $menuitem['nama'] ?></b></a>
							</h5>
							<ul class="mtb-5 list-li-mr-20 color-blue">
								<li>
									<a href="<?= base_url($keyname . '/' . $menuitem['url'] . '/' . strtolower($menuitem['aksi'])) ?>">
										<i class="mr-5 font-12 ion-<?= $menuitem['icon'] ?>"></i>
										<?= $menuitem['aksi'] . ' ' . $menuitem['nama'] ?>
									</a>
								</li>
							</ul>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
<div class="col-sm-12 col-md-4 col-lg-4">
	<div class="mb-30 p-30 ptb-sm-25 plr-sm-15 card-view">
		<a data-toggle="collapse" data-target="#statistik">
			<h4 class="color-primary p-title"><b>STATISTIK PENGUNJUNG</b></h4>
		</a>
		<div class="row collapse" id="statistik">
			<div class="col-sm-12 col-lg-12">
				<div class="brdr-l-grey-2 pl-20 mb-30">
					<h5>
						<a href="#"><b><?= $menuitem['nama'] ?></b></a>
					</h5>
					<ul class="mtb-5 list-li-mr-20 color-blue">
						<li>
							<a href="">
								<i class="mr-5 font-12 ion-edit"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$('.collapse').collapse()
</script>
