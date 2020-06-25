<style>
	@media (min-width: 768px) {

		/* show 3 items */
		.carousel-inner .active,
		.carousel-inner .active+.carousel-item,
		.carousel-inner .active+.carousel-item+.carousel-item {
			display: block;
		}

		.carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
		.carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item,
		.carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item+.carousel-item {
			transition: none;
		}

		.carousel-inner .carousel-item-next,
		.carousel-inner .carousel-item-prev {
			position: relative;
			transform: translate3d(0, 0, 0);
		}

		.carousel-inner .active.carousel-item+.carousel-item+.carousel-item+.carousel-item {
			position: absolute;
			top: 0;
			right: -33.3333%;
			z-index: -1;
			display: block;
			visibility: visible;
		}

		/* left or forward direction */
		.active.carousel-item-left+.carousel-item-next.carousel-item-left,
		.carousel-item-next.carousel-item-left+.carousel-item,
		.carousel-item-next.carousel-item-left+.carousel-item+.carousel-item,
		.carousel-item-next.carousel-item-left+.carousel-item+.carousel-item+.carousel-item {
			position: relative;
			transform: translate3d(-100%, 0, 0);
			visibility: visible;
		}

		/* farthest right hidden item must be abso position for animations */
		.carousel-inner .carousel-item-prev.carousel-item-right {
			position: absolute;
			top: 0;
			left: 0;
			z-index: -1;
			display: block;
			visibility: visible;
		}

		/* right or prev direction */
		.active.carousel-item-right+.carousel-item-prev.carousel-item-right,
		.carousel-item-prev.carousel-item-right+.carousel-item,
		.carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item,
		.carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item+.carousel-item {
			position: relative;
			transform: translate3d(100%, 0, 0);
			visibility: visible;
			display: block;
			visibility: visible;
		}

		.card {
			border: 0px
		}
	}
</style>
<section class="pt-0 bg-primary">
	<div class="pt-50 plr-50 h-450x h-xs-500x">
		<div class="container-fluid">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner row mx-auto">
					<?php foreach ($highlight as $key => $highlight) { ?>
						<?php if ($key == 0) { ?>
							<div class="carousel-item col-md-4 active">
								<div class="card" style="height:400px">
									<div class="img-bg bg-grad-layer-6 d-md-none d-lg-none" style="background:url(<?= base_url('assets/uploads/' . $highlight->thumbnail) ?>) no-repeat center; background-size: cover"></div>
									<img src="<?= base_url('assets/uploads/' . $highlight->thumbnail) ?>" alt="" srcset="" />
									<div class="abs-blr color-white p-20">
										<h3 class="mb-10 mb-sm-5 t-upper">
											<a class="hover-grey" href="<?= base_url('konten/detail/kegiatan/' . $highlight->id) ?>">
												<strong>
													<?= $highlight->title ?>
												</strong>
											</a>
										</h3>

										<ul class="list-li-mr-10 color-grey">
											<li>
												<i class="mr-5 font-12 ion-clock"></i>
												<?= $highlight->date ?>
											</li>
										</ul>

									</div>
								</div>
							</div>
						<?php } else { ?>
							<div class="carousel-item col-md-4">
								<div class="card" style="height:400px">
									<div class="img-bg bg-grad-layer-6 d-md-none d-lg-none" style="background:url(<?= base_url('assets/uploads/' . $highlight->thumbnail) ?>) no-repeat center; background-size: cover"></div>

									<img src="<?= base_url('assets/uploads/' . $highlight->thumbnail) ?>" alt="" srcset="" />
									<div class="abs-blr color-white p-20">
										<h3 class="mb-10 mb-sm-5 t-upper">
											<a class="hover-grey" href="<?= base_url('konten/detail/kegiatan/' . $highlight->id) ?>">
												<strong>
													<?= $highlight->title ?>
												</strong>
											</a>
										</h3>

										<ul class="list-li-mr-10 color-grey">
											<li>
												<i class="mr-5 font-12 ion-clock"></i>
												<?= $highlight->date ?>
											</li>
										</ul>

									</div>
								</div>
							</div>
						<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	</div>
	</div>
</section>
<section>
	<h4>
		<marquee behavior="" direction="">
			running text -
			running text -
			running text -
			running text -
			running text
		</marquee>
	</h4>
</section>
