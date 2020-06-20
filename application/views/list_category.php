<?php

$arsip = array(
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
$hmj = array(
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
$laboratorium = array(
	[
		"nama" => "PERPUSTAKAAN",
		"url" => "perpustakaan",
	],
	[
		"nama" => "JUDUL SKRIPSI",
		"url" => "judul",
	],
	[
		"nama" => "ABSTRAKSI SKRIPSI",
		"url" => "abstraksi",
	],
);
$pengabdian = array(
	[
		"nama" => "DESAN BINAAN",
		"url" => "desa",
	],
	[
		"nama" => "KONSELING",
		"url" => "konsenling",
	],
);
$pengumuman = array(
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
$publikasi = array(
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

if ($kategori == "arsip") {
	$data = $arsip;
} else if ($kategori == "hmj") {
	$data = $hmj;
} else if ($kategori == "laboratorium") {
	$data = $laboratorium;
} else if ($kategori == "pengabdian") {
	$data = $pengabdian;
} else if ($kategori == "pengumuman") {
	$data = $pengumuman;
} else if ($kategori == "publikasi") {
	$data = $publikasi;
} else {
}

?>

<div class="row">
	<?php foreach ($data as $data) { ?>
		<div class="col-md-4">
			<div class="mb-30 mt-md-30 p-30 card-view">
				<a href="<?= base_url($kategori . '/' . $data['url']) ?>">
					<h4 class="p-title">
						<b><?= $data['nama'] ?></b>
					</h4>
				</a>
			</div>
		</div>
	<?php } ?>
</div>
