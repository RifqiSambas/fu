<head>
	<title>Update Form</title>
</head>

<body>
	<h3>Konten telah berhasil diupdate</h3>
	<p><a href="<?= base_url('admin') ?>">kembali ke dashboard</a></p>
	<p><a href="<?= base_url('admin/' . $data->topic) ?>">kembali ke daftar <?= $data->topic ?></a></p>
</body>

</html>
