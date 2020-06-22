<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<style>
	body {
		background: #eee;
	}
</style>


<div class="container mt-4">
	<div class="row mt-4">
		<aside class="col-sm-2 col-md-4 col-xs-1">

		</aside> <!-- col.// -->
		<aside class="col-sm-8 mt-4 col-md-4 col-xs-10">
			<div class="card">
				<article class="card-body">
					<h4 class="card-title text-center mb-4 mt-1">
						<b>
							ADMIN DASHBOARD
						</b>
					</h4>
					<hr>
					<p class="text-danger text-center"><?= $this->session->userdata('error') ?></p>
					<form action="<?= base_url('auth/register') ?>" method="post">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"> <i class="fa fa-user"></i> </span>
								</div>
								<input name="name" class="form-control" placeholder="Nama" type="text" minlength="5" required>
							</div> <!-- input-group.// -->
						</div> <!-- form-group// -->
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
								</div>
								<input name="email" class="form-control" placeholder="Email" type="email" required>
							</div> <!-- input-group.// -->
						</div> <!-- form-group// -->
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
								</div>
								<input class="form-control" placeholder="******" type="password" name="password" minlength="8" required>
							</div> <!-- input-group.// -->
						</div> <!-- form-group// -->
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
								</div>
								<input class="form-control" placeholder="******" type="password" name="confirmation" minlength="8" required>
							</div> <!-- input-group.// -->
						</div> <!-- form-group// -->
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block"> Register </button>
						</div> <!-- form-group// -->
					</form>
				</article>
			</div> <!-- card.// -->
		</aside> <!-- col.// -->
		<aside class="col-sm-2 col-md-4 col-xs-1">
		</aside> <!-- col.// -->

	</div> <!-- row.// -->
</div>
