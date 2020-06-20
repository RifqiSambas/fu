<form action="<?= base_url('auth/register') ?>" method="post">
	<div class="form-group">
		<label>Your email</label>
		<input name="email" class="form-control" placeholder="Email" type="email">
	</div> <!-- form-group// -->
	<div class="form-group">
		<label>Your password</label>
		<input class="form-control" placeholder="******" type="password" name="password">
	</div> <!-- form-group// -->
	<div class="form-group">
		<label>Confirm password</label>
		<input class="form-control" placeholder="******" type="password" name="confirmation">
	</div> <!-- form-group// -->
	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-block"> Login </button>
	</div> <!-- form-group// -->
</form>
