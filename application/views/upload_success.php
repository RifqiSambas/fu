<head>
	<title>Upload Form</title>
</head>

<body>

	<h3>Konten telah berhasil dibuat</h3>

	<ul>
		<?php foreach ($upload_data as $item => $value) : ?>
			<li><?php echo $item; ?>: <?php echo $value; ?></li>
		<?php endforeach; ?>
	</ul>

	<p>
		<form action="<?= base_url('konten') ?>" method="post">
			<input type="hidden" name="category" value="<?= $category ?>">
			<input type="hidden" name="topic" value="<?= $topic ?>">
			<input type="submit" value="tambah <?= $topic ?> lainnya">
		</form>
	</p>
	<p><a href="<?= base_url('admin') ?>">kembali ke dashboard</a></p>

</body>

</html>
