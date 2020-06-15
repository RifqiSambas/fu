<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete Success</title>
</head>

<body>
	<h3>Berhasil Menghapus Konten</h3>
	<p><a href="<?= base_url('admin') ?>">kembali ke dashboard</a></p>
	<p><a href="<?= base_url('admin/' . $data->topic) ?>">kembali ke daftar <?= $data->topic ?></a></p>
</body>

</html>
