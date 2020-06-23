<div class="col-md-12 col-lg-12">
	<div class="mb-30 p-30 pt-sm-25 plr-sm-15 card-view">
		<div class="row">
			<h4 class="color-primary p-title">
				<b>
					<a href="<?= base_url('admin/tambah') ?>">
						TAMBAH <?= $title ?>
					</a>
				</b>
			</h4>
		</div>
		<table id="list" class="display">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Email</th>
					<th>Role</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($data as $data) { ?>
					<tr>
						<td><?= $data->nama ?></td>
						<td><?= $data->email ?></td>
						<td><?php if ($data->role == 1) echo 'admin' ?></td>
						<td>
							<a class="text-primary" href="<?= base_url('admin/edit/' . $data->id) ?>">EDIT</a> |
							<a class="text-danger" href="<?= base_url('admin/delete/' . $data->id) ?>">DELETE</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
