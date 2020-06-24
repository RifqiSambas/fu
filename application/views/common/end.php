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
<script>
	$(document).ready(function() {
		$("#myCarousel").on("slide.bs.carousel", function(e) {
			var $e = $(e.relatedTarget);
			var idx = $e.index();
			var itemsPerSlide = 3;
			var totalItems = $(".carousel-item").length;

			if (idx >= totalItems - (itemsPerSlide - 1)) {
				var it = itemsPerSlide - (totalItems - idx);
				for (var i = 0; i < it; i++) {
					// append slides to end
					if (e.direction == "left") {
						$(".carousel-item")
							.eq(i)
							.appendTo(".carousel-inner");
					} else {
						$(".carousel-item")
							.eq(0)
							.appendTo($(this).find(".carousel-inner"));
					}
				}
			}
		});
	});
</script>
</body>

</html>
