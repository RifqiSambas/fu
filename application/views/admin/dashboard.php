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
								<a href="<?= base_url($keyname . '/' . $menuitem['url']) ?>" b><?= $menuitem['nama'] ?></b></a>
							</h5>
							<ul class="mtb-5 list-li-mr-20 color-blue">
								<li>
									<form method="post" action="<?= base_url('konten/') ?>">
										<input type="hidden" name="category" value="<?= $keyname ?>" />
										<input type="hidden" name="topic" value="<?= $menuitem['url'] ?>" />
										<button type="submit">
											<?= $menuitem['aksi'] . " " . $menuitem['nama'] ?>
										</button>
									</form>
								</li>
								<?php if ($menuitem['list']) { ?>
									<li>
										<a href="<?= base_url('admin/' . $menuitem['url']) ?>">
											Daftar
											<?= $menuitem['nama'] ?>
										</a>
									</li>
								<?php } ?>
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
		<a data-toggle="collapse" data-target="#lainnya">
			<h4 class="color-primary p-title"><b>LAINNYA</b></h4>
		</a>
		<div class="row collapse" id="lainnya">
			<div class="col-sm-12 col-lg-12">
				<div class="brdr-l-grey-2 pl-20 mb-30">
					<h5>
						<b>Sambutan Dekan</b>
					</h5>
					<ul class="mtb-5 list-li-mr-20 color-blue">
						<li>
							<form method="post" action="<?= base_url('konten/') ?>">
								<input type="hidden" name="category" value="<?= $keyname ?>" />
								<input type="hidden" name="topic" value="<?= $menuitem['url'] ?>" />
								<button type="submit">
									Edit Sambutan Dekan
								</button>
							</form>
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
