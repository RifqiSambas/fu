<?php if (!$data->category) redirect('admin') ?>
<html>
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
			<div class="col-md-12">
				<div class="mb-20 p-30 ptb-sm-25 plr-sm-15 card-view">
					<h2><b><a href="<?= base_url('admin') ?>">ADMIN DASHBOARD</a></b></h2>
				</div>
				<div class="mb-30 p-30 ptb-sm-25 plr-sm-15 card-view">
					<h3>Edit Konten</h3>
					<h5>Kategori : <?= $data->category ?> | Topik : <?= $data->topic ?></h5>
					<br />
					<div class="row">
						<div class="col-md-6">
						</div>
						<div class="col-md-6">
							<span>
							</span>
						</div>
					</div>
					<?php echo form_open_multipart('konten/update'); ?>
					<div class="form-group">
						<input type="text" name="title" class="form-control" value="<?= $data->title ?>" placeholder="Title" required>
					</div>
					<div class="form-group">
						<input type="text" name="author" class="form-control" value="<?= $data->author ?>" placeholder="Author" required>
					</div>
					<div class="form-group">
						<input values="<?= $data->date ?>" type="date" name="date" class="form-control">
					</div>
					<input type="hidden" name="id" value="<?= $data->id ?>" class="form-control">
					<input type="hidden" name="category" value="<?= $data->category ?>" class="form-control">
					<input type="hidden" name="topic" value="<?= $data->topic ?>" class="form-control">
					<div class="form-group">
						<label for="thumbnail">Thumbnail</label>
						<input type="file" name="thumbnail" id="thumbnail">
					</div>
					<div class="form-group">
						<textarea name="description" class="form-control" placeholder="Description" required><?= $data->description ?></textarea>
					</div>
					<div class="form-group">
						<label for="content">Content</label>
						<textarea name="content" id="ckeditor" values="<?= $data->content ?>" required><?= $data->description ?></textarea>
					</div>
					<button type="submit" class="btn btn-success">UPDATE</button>
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
