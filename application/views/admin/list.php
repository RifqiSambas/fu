<div class="col-md-12 col-lg-12">
	<div class="mb-30 p-30 ptb-sm-25 plr-sm-15 card-view">
		<h4 class="color-primary p-title"><b>DAFTAR <?= $title ?></b></h4>
		<table id="list" class="display">
			<thead>
				<tr>
					<th>Judul Berita</th>
					<th>Editor</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($data as $data) { ?>
					<tr>
						<td>
							<a href="<?= base_url('konten/detail/' . $data->topic . '/' . $data->id) ?>">
								<?= $data->title ?>
							</a>
						</td>
						<td><?= $data->author ?></td>
						<td>
							<a class="text-primary" href="<?= base_url('konten/edit/' . $data->id) ?>">EDIT</a> |
							<a class="text-danger" href="<?= base_url('konten/delete/' . $data->id) ?>">DELETE</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
