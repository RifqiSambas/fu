<?php
$data = array(
	[
		"nama" => "BERITA",
		"url" => "berita",
	],
	[
		"nama" => "POJOK DEKAN",
		"url" => "dekan",
	],
	[
		"nama" => "POJOK WADEK",
		"url" => "wadek",
	],
	[
		"nama" => "ARTIKEL DOSEN",
		"url" => "dosen",
	],
	[
		"nama" => "ARTIKEL ALUMNI",
		"url" => "alumni",
	],
	[
		"nama" => "ARTIKEL MAHASISWA",
		"url" => "mahasiswa",
	],
	[
		"nama" => "BUKU - BUKU",
		"url" => "buku",
	],
);
?>

<div class="row">
	<?php foreach ($data as $data) { ?>
		<div class="col-md-4">
			<div class="mb-30 mt-md-30 p-30 card-view">
				<a href="<?= base_url('arsip/' . $data['url']) ?>">
					<h4 class="p-title">
						<b><?= $data['nama'] ?></b>
					</h4>
				</a>
			</div>
		</div>
	<?php } ?>
</div>
