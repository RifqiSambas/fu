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
	<div class="container-fluid mt-30">
		<div class="row justify-content-md-center">
			<div class="col-md-12">
				<div>
					<div class="mb-30 p-30 ptb-sm-25 plr-sm-15 card-view">
						<h2><b><a href="<?= base_url('admin') ?>">ADMIN DASHBOARD</a></b></h2>
					</div>
					<span class="text-danger text-center"><?= $error ?></span>
				</div>
			</div>
			<div class="col-md-12">
				<div class="mb-30 p-30 ptb-sm-25 plr-sm-15 card-view">
					<h3><?= $action ?> Akun</h3>
					<br />
					<div class="row">
						<div class="col-md-6">
						</div>
						<div class="col-md-6">
							<span>
							</span>
						</div>
					</div>
					<?php echo form_open_multipart('admin/' . $url); ?>
					<input type="hidden" name="id" value="<?= $id ?>">
					<div class="form-group">
						<input type="text" name="nama" class="form-control" value="<?php if ($data['nama'] !== "") echo $data['nama'] ?>" placeholder="Nama" minlength="5" required>
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control" value="<?php if ($data['email'] !== "") echo $data['email'] ?>" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="************" minlength="6" required>
					</div>
					<div class="form-group">
						<input type="password" name="confirmation" class="form-control" placeholder="confirmation" minlength="6" required>
					</div>
					<button type="submit" class="btn btn-success"><?= $action ?> Akun</button>
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
