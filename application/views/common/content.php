<section class="ptb-30">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8">
				<?php $this->load->view('common/breadcrumb') ?>
				<?php $this->load->view($content) ?>
			</div>
			<div class="col-md-12 col-lg-4">
				<div class="p-30 mb-30 card-view">
					<?php $this->load->view('common/recent') ?>
				</div>
			</div>
		</div>
	</div>
</section>
