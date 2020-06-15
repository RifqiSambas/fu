<script src="<?= base_url('assets/plugin-frameworks/jquery-3.2.1.min.js') ?>"></script>

<script src="<?= base_url('assets/plugin-frameworks/tether.min.js') ?>"></script>

<script src="<?= base_url('assets/plugin-frameworks/bootstrap.js') ?>"></script>

<script src="<?= base_url('assets/common/scripts.js') ?>"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
	$('.carousel').carousel();
	$(document).ready(function() {
		$('#list').DataTable();
	});
</script>
</body>

</html>
