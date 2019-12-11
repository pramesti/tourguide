
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
				<h3 class="page-title">Daftar Destinasi</h3>
			<div class="row"></div>
			<div class="text-right" style="padding-bottom:20px">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah">Tambah Destinasi</button>
            </div>
			<div class="panel">
			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
                            <th>Nama Wisata</th>
                            <th>Deskripsi</th>
                            <th>Lokasi</th>
							<th>Kota</th>
							<th>Paket</th>
							<th>Cover</th>
                            <th>Aksi</th>
						</tr>
					</thead>
					<tbody>
                    <?php foreach ($destinasi as $items): ?>
                        <tr>
                            <td><?= $items->id_tempat?></td>
                            <td><?= $items->nama_wisata?></td>
                            <td><?= $items->deskripsi?></td>
                            <td><?= $items->lokasi?></td>
							<td><?= $items->nama_kota?></td>
							<td><?= $items->nama_paket?></td>
                            <td><img src="<?= base_url('assets/img_destinasi/'.$items->cover);?>" alt="" width="100px"></td>
                            <td>
							<a href="#ubah" class="btn btn-primary" data-toggle="modal" class="btn btn-warning" 
							onclick="prepare_edit_destinasi(<?= $items->id_tempat?>)">Edit</a>

                            <a href="<?= base_url('Admin/Destinasi/delete_destinasi/'.$items->id_tempat) ?>" onclick="return confirm('Anda Yakin?')" 
							class="btn btn-danger"><i class="lnr lnr-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
					</tbody>
                </table>
            </div>
    </div>
	</div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="tambah">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Tambah Destinasi</h4>
			</div>
			<div class="modal-body">
				<form action="<?=base_url('Admin/Destinasi/add_destinasi')?>" method="post" enctype="multipart/form-data">
					Nama wisata
                    <input type="text" name="nama_wisata" class="form-control">
					<br> Deskripsi
					<input type="text" name="deskripsi" class="form-control">
					<br> Lokasi
					<input type="text" name="lokasi" class="form-control">
					<br> Kota
					<select name="id_kota" class="form-control">
						<?php
				foreach ($data_kota as $kota) {
					echo "<option value= '".$kota->id_kota."'>
					".$kota->nama_kota."
					</option>";
				}
				 ?>
					</select>
                    <br> Paket
					<select name="id_paket" class="form-control">
						<?php
				foreach ($data_paket as $paket) {
					echo "<option value= '".$paket->id_paket."'>
					".$paket->nama_paket."
					</option>";
				}
				 ?>
					</select>
					<br>Cover
          <input type="file" name="cover" class="form-control">
					<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
				<form action="<?=base_url('Admin/Destinasi/edit')?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="edit_id_tempat" id="edit_id_tempat">
					Nama wisata
                    <input type="text" name="edit_nama_wisata" id="edit_nama_wisata" class="form-control">
					<br> Deskripsi
					<input type="text" name="edit_deskripsi" id="edit_deskripsi" class="form-control">
					<br> Lokasi
					<input type="text" name="edit_lokasi" id="edit_lokasi" class="form-control">
					<br> Kota
					<select name="edit_id_kota" id="edit_id_kota" class="form-control">
						<?php
				foreach ($data_kota as $kota) {
					echo "<option value= '".$kota->id_kota."'>
					".$kota->nama_kota."
					</option>";
				}
				 ?>
					</select>
                    <br> Paket
					<select name="edit_id_paket" id="edit_id_paket" class="form-control">
						<?php
				foreach ($data_paket as $paket) {
					echo "<option value= '".$paket->id_paket."'>
					".$paket->nama_paket."
					</option>";
				}
				 ?>
					</select>
					<br>Cover
					<div id="data_cover"></div>
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
	function prepare_edit_destinasi(id_tempat)
	{
		$.getJSON('<?php echo base_url(); ?>admin/Destinasi/get_data_destinasi_by_id/' + id_tempat,  function(data){
			$("#edit_id_tempat").val(data.id_tempat);
			$("#edit_nama_wisata").val(data.nama_wisata);
			$("#edit_deskripsi").val(data.deskripsi);
			$("#edit_lokasi").val(data.lokasi);
			$("#edit_id_kota").val(data.id_kota);
			$("#edit_id_paket").val(data.id_paket);
			$("#data_cover").html('<img src="<?php echo base_url(); ?>assets/img_destinasi/' + data.cover + '" width="100px" >');
		});
	}
</script>	