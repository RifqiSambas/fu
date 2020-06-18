<style>
	.img-bg:hover {
		border: 2px solid white;
	}
</style>
<section class="pt-0 bg-primary">
	<div class="pt-50 plr-50 h-600x h-md-800x h-xs-1000x oflow-hidden">
		<div class="w-60 w-md-100 float-left float-md-none h-100 h-md-40 h-xs-50">

			<div class="w-50 w-xs-100 float-left float-xs-none pos-relative h-100 h-xs-50">
				<div class="img-bg bg-grad-layer-6" style="background:url(<?= base_url('assets/uploads/' . $highlight[0]->thumbnail) ?>) no-repeat center; background-size: cover"></div>

				<div class="abs-blr color-white p-20">
					<h3 class="mb-10 mb-sm-5 t-upper">
						<a class="hover-grey" href="<?= base_url('konten/detail/kegiatan/' . $highlight[0]->id) ?>">
							<strong>
								<?= $highlight[0]->title ?>
							</strong>
						</a>
					</h3>

					<ul class="list-li-mr-10 color-grey">
						<li>
							<i class="mr-5 font-12 ion-clock"></i>
							<?= $highlight[0]->date ?>
						</li>
					</ul>

				</div>
			</div>

			<div class="w-50 w-xs-100 float-left float-xs-none pos-relative h-100 h-xs-50 pt-xs-10">
				<div class="mlr-10 mr-md-0 ml-xs-0 pos-relative h-100">
					<!-- Image as bg-2 -->
					<div class="img-bg bg-grad-layer-6" style="background:url(<?= base_url('assets/uploads/' . $highlight[1]->thumbnail) ?>) no-repeat center; background-size: cover"></div>

					<div class="abs-blr color-white p-20">
						<h3 class="mb-10 mb-sm-5 t-upper">
							<a class="hover-grey" href="<?= base_url('konten/detail/kegiatan/' . $highlight[1]->id) ?>">
								<b>
									<?= $highlight[1]->title ?>
								</b>
							</a>
						</h3>
						<ul class="list-li-mr-10 color-grey">
							<li>
								<i class="mr-5 font-12 ion-clock"></i>
								<?= $highlight[1]->date ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="w-40 w-md-100 float-left float-md-none h-100 h-md-60 h-xs-50">
			<div class="h-50 pb-5 pt-md-10">
				<div class="h-100 pos-relative">
					<div class="img-bg bg-grad-layer-6" style="background:url(<?= base_url('assets/uploads/' . $highlight[2]->thumbnail) ?>) no-repeat center; background-size: cover"></div>

					<div class="abs-blr color-white p-20">
						<h3 class="mb-10 mb-sm-5 t-upper">
							<a class="hover-grey" href="<?= base_url('konten/detail/kegiatan/' . $highlight[2]->id) ?>">
								<b>
									<?= $highlight[2]->title ?>
								</b>
							</a>
						</h3>
						<ul class="list-li-mr-10 color-ash">
							<li>
								<i class="mr-5 font-12 ion-clock"></i>
								<?= $highlight[2]->date ?>
							</li>
							<li>
						</ul>
					</div>
				</div>
			</div>

			<div class="h-50 pt-5">
				<div class="h-100 pos-relative">
					<div class="img-bg bg-grad-layer-6" style="background:url(<?= base_url('assets/uploads/' . $highlight[3]->thumbnail) ?>) no-repeat center; background-size: cover"></div>

					<div class="abs-blr color-white p-20">
						<h3 class="mb-10 mb-sm-5 t-upper">
							<a class="hover-grey" href="<?= base_url('konten/detail/kegiatan/' . $highlight[3]->id) ?>">
								<b>
									<?= $highlight[3]->title ?>
								</b>
							</a>
						</h3>
						<ul class="list-li-mr-20 color-grey">
							<li><i class="mr-5 font-12 ion-clock">
								</i>
								<?= $highlight[3]->date ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
