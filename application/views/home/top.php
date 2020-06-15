<style>
	p {
		text-align: justify;
	}
</style>
<section class="">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-8">
				<?php $this->load->view('home/component/sambutan') ?>
			</div>
			<div class="col-sm-12 col-lg-4">
				<?php $this->load->view('home/component/layanan') ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-lg-8">
				<div class="p-30 card-view mb-30">
					<?php $this->load->view('home/component/akademik') ?>
				</div>
				<div class="p-30 card-view mb-30">
					<?php $this->load->view('home/component/berita') ?>
				</div>
			</div>
			<!-- col-sm-8 -->

			<div class="col-md-12 col-lg-4">
				<div class="mb-30 mt-md-30 p-30 card-view">
					<?php $this->load->view('home/component/dekan') ?>
				</div>
				<!-- card-view -->

				<div class="mb-30 p-30 card-view">
					<?php $this->load->view('home/component/wadek') ?>
				</div>
				<!-- card-view -->

				<div class="mb-30 p-30 card-view">
					<?php $this->load->view('home/component/dosen') ?>
				</div>
				<!-- card-view -->
				<div class="mb-30 p-30 card-view">
					<?php $this->load->view('home/component/alumni') ?>
				</div>
			</div>
			<!-- col-sm-4 -->
		</div>
		<!-- row -->
	</div>
	<!-- container -->
</section>
<style>
	.buku img {
		height: 200px;
		width: auto;
		box-shadow: 5px 5px 5px #222;
	}

	.buku img:hover {
		border: 1px solid white;
	}

	.buku a:hover {
		color: orange;
	}
</style>
<section class="buku bg-primary color-white ">
	<div class="container" width="100%">
		<?php $this->load->view('home/component/buku') ?>
	</div>
</section>
