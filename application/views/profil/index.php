<?php
$data = array(
	[
		"nama" => "SEJARAH",
		"url" => "sejarah",
	],
	[
		"nama" => "VISI MISI TUJUAN",
		"url" => "visi",
	],
	[
		"nama" => "PROGRAM STUDI",
		"url" => "program",
	],
	[
		"nama" => "STAF PENGAJAR",
		"url" => "staf",
	],
	[
		"nama" => "STRUKTUR KEPENGURUSAN",
		"url" => "struktur",
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
