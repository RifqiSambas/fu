<?php
$data = array(
	[
		"nama" => "BEASISWA",
		"url" => "beasiswa",
	],
	[
		"nama" => "KEGIATAN KAMI",
		"url" => "kegiatan",
	],
	[
		"nama" => "LOWONGAN KERJA",
		"url" => "lowongan",
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