<?php $this->load->view('common/start') ?>
<?php $this->load->view('common/header') ?>
<section class="ptb-30">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8">
				<?php foreach ($data as $data) { ?>
					<div>
						<p><?= $data->id ?></p>
						<p><?= $data->title ?></p>
						<p><?= $data->author ?></p>
						<p><?= $data->date ?></p>
						<p><?= $data->description ?></p>
						<p><?= $data->category ?></p>
						<p><?= $data->topic ?></p>
						<img src="<?= base_url('assets/uploads/' . $data->thumbnail) ?>" alt="<?= $data->thumbnail ?>" />
						<p><?= $data->content ?></p>
					</div>
					<br />
				<?php } ?>
			</div>
			<div class="col-md-12 col-lg-4">
				<div class="p-30 mb-30 card-view">
				</div>
			</div>
		</div>
	</div>
</section>
<?php $this->load->view('common/footer') ?>
<?php $this->load->view('common/end') ?>
