<html lang="en">
<!DOCTYPE html>

<head>
	<title>Fakultas Ushuluddin</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta charset="UTF-8" />

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,600,700" rel="stylesheet" />

	<!-- Stylesheets -->

	<link href="<?= base_url('assets/common/styles.css') ?>" rel="stylesheet" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


	<link href="<?= base_url('assets/fonts/ionicons.css') ?>" rel="stylesheet" />

	<style>
		body {
			background: #eee
		}
	</style>

<body>
	<?php echo $error; ?>
	<div class="container-fluid mt-30">
		<div class="row justify-content-md-center">
			<div class="col-md-4">
				<div>
					<div class="mb-30 p-30 ptb-sm-25 plr-sm-15 card-view">
						<h2><b><a href="<?= base_url('admin') ?>">ADMIN DASHBOARD</a></b></h2>
					</div>
				</div>
				<div class="mb-30 p-30 ptb-sm-25 plr-sm-15 card-view">

					<h3>Asset Konten</h3>
					<p align="justify">
						Jika konten akan berisikan asset (gambar), upload terlebih dahulu file asset sebelum membuat konten, abaikan jika tidak mmenggunakan asset
						<p>
							<form action="<?= base_url('asset/simpan') ?>">
								<div class="form-group">
									<input type="file" class="asset" name="asset" id="asset">
								</div>
								<div class="form-group">
									<button class="btn btn-primary" type="submit">Upload Asset</button>
								</div>
							</form>
				</div>
			</div>
			<div class="col-md-8">
				<div class="mb-30 p-30 ptb-sm-25 plr-sm-15 card-view">
					<h3>Buat Konten Baru</h3>
					<?php echo form_open_multipart('konten/simpan'); ?>
					<div class="form-group">
						<input type="text" name="title" class="form-control" placeholder="Title" required>
					</div>
					<div class="form-group">
						<input type="text" name="author" class="form-control" placeholder="Author" required>
					</div>
					<div class="form-group">
						<input type="text" name="description" class="form-control" placeholder="Description" required>
					</div>
					<div class="form-group">
						<input type="date" name="date" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="category" value="<?= $category ?>" class="form-control" disabled>
					</div>
					<div class="form-group">
						<input type="text" name="topic" value="<?= $topic ?>" class="form-control" disabled>
					</div>
					<div class="form-group">
						<input type="file" name="thumbnail" id="thumbnail">
					</div>
					<div class="form-group">
						<textarea name="content" id="ckeditor" required></textarea>
					</div>
					<button type="submit" class="btn btn-success">PUBLISH</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="<?php echo base_url('assets/jquery/jquery-3.3.1.js'); ?>"></script>
	<script src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
	<script type="text/javascript">
		$(function() {
			CKEDITOR.replace('ckeditor', {
				filebrowserImageBrowseUrl: '<?php echo base_url('assets/kcfinder/browse.php'); ?>',
				height: '400px'
			});
		});
	</script>
</body>

</html>
