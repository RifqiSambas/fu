<?php $this->load->view('common/start') ?>
<?php $this->load->view('common/header') ?>
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
						<li><i class="mr-5 font-12 ion-clock"></i>Jan 25, 2018</li>
						<li><i class="mr-5 font-12 ion-android-person"></i>John Dowson</li>
						<li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>15</li>
						<li><i class="mr-5 font-12 ion-eye"></i>105</li>
					</ul>
				</div>
				<section class="ptb-30">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-lg-8">
								<div>
									<p><?= $data->id ?></p>
								</div>
								<br />
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</section>
<?php $this->load->view('common/footer') ?>
<?php $this->load->view('common/end') ?>
