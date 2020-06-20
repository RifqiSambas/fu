<?php
$data = array(
	[
		"nama" => "BUKU",
		"url" => "buku",
	],
	[
		"nama" => "JURNAL",
		"url" => "jurnal",
	],
	[
		"nama" => "KLIPING KORAN",
		"url" => "kliping",
	],
);
?>

<div class="row">
	<?php foreach ($data as $data) { ?>
		<div class="col-md-4">
			<div class="mb-30 mt-md-30 p-30 card-view">
				<a href="<?= base_url('publikasi/' . $data['url']) ?>">
					<h4 class="p-title">
						<b><?= $data['nama'] ?></b>
					</h4>
				</a>
			</div>
		</div>
	<?php } ?>
</div>
