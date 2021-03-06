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
									<?php if ($menuitem['url'] == 'sambutan') { ?>
										<a href="<?= base_url('konten/edit/') . $menuitem['url'] ?>">
											Edit
											<?= $menuitem['nama'] ?>
										</a>
									<?php } else { ?>
										<form method="post" action="<?= base_url('konten/') ?>">
											<input type="hidden" name="category" value="<?= $keyname ?>" />
											<input type="hidden" name="topic" value="<?= $menuitem['url'] ?>" />
											<button type="submit">
												<?= $menuitem['aksi'] . " " . $menuitem['nama'] ?>
											</button>
										</form>
									<?php } ?>
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
<script>
	$('.collapse').collapse()
</script>
