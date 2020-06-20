<style>
	p {
		text-align: justify;
	}
</style>
<section class="ptb-30">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8">
				<div class="ptb-0">
					<a class="mt-10" href="<?= base_url() ?>"><i class="mr-5 ion-ios-home"></i><b>BERANDA</b></a>
					<a class="mt-10" href="<?= base_url($data->category) ?>"><i class="mlr-10 ion-chevron-right"></i><b><?= strtoupper($data->category) ?></b></a>
					<a class="mt-10" href="<?= base_url($data->category . '/' . $data->topic) ?>"><i class="mlr-10 ion-chevron-right"></i><b><?= strtoupper($data->topic) ?></b></a>
					<h1 class="mtb-20"><b><?= $data->title ?></b></h1>
					<ul class="list-li-mr-10 color-lite-black">
						<li><i class="mr-5 font-12 ion-clock"></i><?= $data->date ?></li>
						<li><i class="mr-5 font-12 ion-android-person"></i><?= $data->author ?></li>
					</ul>
				</div>
				<section class="ptb-30">
					<div class="p-30 mb-30 card-view">
						<?= $data->content ?>
					</div>
				</section>
			</div>
			<div class="col-md-12 col-lg-4">
				<div class="p-30 mb-30 card-view">
					<?php $this->load->view('common/recent') ?>
				</div>
			</div>
		</div>
	</div>
</section>
