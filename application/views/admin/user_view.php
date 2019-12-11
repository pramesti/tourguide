<div class="main">
	<div class="container-fluid">
		<h3 class="page-title"><br>User</h3>
		<div class="row">
			<div class="col-md-12">
				<div class="text-right" style="padding-bottom:20px">
				</div>
				<div class="panel">
					<div class="panel-body">
						<table class="table">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nama User</th>
									<th>Email</th>
									<th>Telepon</th>
									<th>Alamat</th>
									<th>Tanggal Lahir</th>
									<th>Password</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($user as $items): ?>
								<tr>
									<td><?=$items->id_user?></td>
									<td><?=$items->nama_user?></td>
									<td><?=$items->email?></td>
									<td><?=$items->telp?></td>
									<td><?=$items->alamat?></td>
									<td><?=$items->tgl_lahir?></td>
									<td><?=$items->password?></td>
									<td>

										<a href="#ubah" class="btn btn-primary" data-toggle="modal"
											class="btn btn-warning"
											onclick="prepare_edit_user(<?= $items->id_user?>)">Edit</a>

										<a href="<?= base_url('Admin/Destinasi/delete_destinasi/'.$items->id_user) ?>"
											onclick="return confirm('Anda Yakin?')" class="btn btn-danger"><i
												class="lnr lnr-trash"></i></a>

									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal Ubah -->
<div class="modal fade" id="ubah">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Edit Destinasi</h4>
			</div>
			<div class="modal-body">
				<form action="<?=base_url('Admin/User/edit')?>" method="post" enctype="multipart/form-data">
					<input type="hidden" name="edit_id_user" id="edit_id_user">
					Nama User
					<input type="text" name="edit_nama_user" id="edit_nama_user" class="form-control">
					<br> Email
					<input type="email" name="edit_email" id="edit_email" class="form-control">
					<br> Telepon
					<input type="text" name="edit_telp" id="edit_telp" class="form-control">
					<br> Alamat
					<input type="text" name="edit_alamat" id="edit_alamat" class="form-control">
					<br> Tanggal Lahir
					<input type="date" name="edit_tgl_lahir" id="edit_tgl_lahir" class="form-control">
					<br> Password
					<input type="password" name="edit_password" id="edit_password" class="form-control">
					<br>
					<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<script>
	function prepare_edit_user(id_user) {
		$.getJSON('<?php echo base_url(); ?>admin/User/get_data_user_by_id/' + id_user, function (data) {
			$("#edit_id_user").val(data.id_user);
			$("#edit_nama_user").val(data.nama_user);
			$("#edit_email").val(data.email);
			$("#edit_telp").val(data.telp);
			$("#edit_alamat").val(data.alamat);
			$("#edit_tgl_lahir").val(data.tgl_lahir);
			$("#edit_password").val(data.password);
		});
	}
</script>