<section class="pb-20">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8">
				<div class="row mb-30">
					<!-- START OF LIFESTYLE -->
					<div class="col-sm-12 col-md-6">
						<div class="p-30 card-view mb-15">
							<?php $this->load->view('home/component/pengumuman') ?>
						</div>
						<!-- p-30 card-view -->
					</div>
					<!-- col-sm-6 -->
					<div class="col-sm-12 col-md-6">
						<div class="p-30 card-view mb-15">
							<?php $this->load->view('home/component/agenda') ?>
						</div>
						<!-- p-30 card-view -->
					</div>
				</div>
				<!-- row -->
				<div class="row mb-30">
					<div class="col-sm-12 col-md-12">
						<div class="p-30 card-view mb-30">
							<?php $this->load->view('home/component/statistik') ?>
						</div>
					</div>
				</div>
			</div>
			<!-- col-sm-8 -->

			<div class="col-md-12 col-lg-4">

				<div class="mb-30 p-30 card-view">
					<?php $this->load->view('home/component/mahasiswa') ?>
				</div>
			</div>
			<!-- col-sm-4 -->
		</div>
		<!-- row -->
	</div>
</section>
