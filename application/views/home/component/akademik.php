<h4 class="p-title"><b>INFORMASI AKADEMIK</b></h4>
<div class="row">
	<?php foreach ($akademik as $akademik) { ?>
		<div class="col-sm-12 col-lg-6">
			<div class="brdr-l-grey-2 pl-20 mb-30">
				<h5>
					<a href="#">
						<b>
							<?= $akademik->title ?>
						</b>
					</a>
				</h5>
				<ul class="mtb-5 list-li-mr-20 color-lite-black">
					<li>
						<i class="mr-5 font-12 ion-clock"></i>
						<?= $akademik->date ?>
					</li>
				</ul>
			</div>
		</div>
	<?php } ?>
</div>
