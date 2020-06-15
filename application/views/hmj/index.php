<?php
$data = array(
	[
		"nama" => "HIMA TH",
		"url" => "th",
	],
	[
		"nama" => "HIMA FA",
		"url" => "fa",
	],
	[
		"nama" => "HIMA PA",
		"url" => "pa",
	],
	[
		"nama" => "HIMA TP",
		"url" => "tp",
	],
);
?>

<div class="row">
	<?php foreach ($data as $data) { ?>
		<div class="col-md-4">
			<div class="mb-30 mt-md-30 p-30 card-view">
				<a href="<?= base_url('profil/' . $data['url']) ?>">
					<h4 class="p-title">
						<b><?= $data['nama'] ?></b>
					</h4>
				</a>
			</div>
		</div>
	<?php } ?>
</div>
