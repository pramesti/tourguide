
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
				<h3 class="page-title">tourguide</h3>
			<div class="row"></div>
			<div class="text-right" style="padding-bottom:20px">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah">Tambah Guide</button>
            </div>
			<div class="panel">

        <?php if($this->session->flashdata('pesan')!=null): ?>
        <div class="alert alert-danger">
        <?= $this->session->flashdata('pesan');?>
        </div>
        <?php endif?>

			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
                            <th>Nama Tourguide</th>
                            <th>Kemampuan</th>
                            <th>Telepon</th>
							<th>Nama Kota</th>
                            <th>Foto</th>
                            <th>Aksi</th>
						</tr>
					</thead>
					<tbody>
                    <?php foreach ($tourguide as $guide): ?>
                        <tr>
                            <td><?= $guide->id_tourguide?></td>
                            <td><?= $guide->nama?></td>
                            <td><?= $guide->kemampuan?></td>
                            <td><?= $guide->telp?></td>
							<td><?= $guide->nama_kota?></td>
                            <td><img src="<?= base_url('assets/img_guide/'.$guide->foto);?>" alt="" width="100px"></td>
                            <td>
                            <a href="#ubah" class="btn btn-primary" data-toggle="modal" class="btn btn-warning" 
							onclick="prepare_edit_guide(<?= $guide->id_tourguide?>)">Edit</a>
                            
							<a href="<?= base_url('admin/Guide/delete_guide/'.$guide->id_tourguide) ?>"  
							class="btn btn-danger" onclick="return confirm('Anda Yakin?')"><i class="lnr lnr-trash"></i></a>
                            </td>
                        </tr>
                        
                        <?php endforeach; ?>
					</tbody>
                </table>
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
				<h4 class="modal-title" id="myModalLabel">Tambah peminjaman</h4>
			</div>
			<div class="modal-body">
				<form action="<?=base_url('Admin/Guide/add_Guide')?>" method="post" enctype="multipart/form-data">
					Nama Guide
                    <input type="text" name="nama" class="form-control">
					<br> Kemampuan
					<input type="text" name="kemampuan" class="form-control">
					<br> Telp
					<input type="text" name="telp" class="form-control">
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
					<br>Foto
          <input type="file" name="foto" class="form-control">
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
				<h4 class="modal-title" id="myModalLabel">Tambah peminjaman</h4>
			</div>
			<div class="modal-body">
				<form action="<?=base_url('Admin/Guide/edit')?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="edit_id_tourguide"  id="edit_id_tourguide">
					 Nama Guide
                    <input type="text" name="edit_nama" id="edit_nama" class="form-control">
					<br> Kemampuan
					<input type="text" name="edit_kemampuan" id="edit_kemampuan" class="form-control">
					<br> Telp
					<input type="text" name="edit_telp" id="edit_telp" class="form-control">
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
					<br>Foto
                    <div id="data_foto"></div> <br>
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
	function prepare_edit_guide(id_tourguide)
	{
		$.getJSON('<?php echo base_url(); ?>admin/Guide/get_data_tourguide_by_id/' + id_tourguide,  function(data){
			$("#edit_id_tourguide").val(data.id_tourguide);
			$("#edit_nama").val(data.nama);
			$("#edit_kemampuan").val(data.kemampuan);
			$("#edit_telp").val(data.telp);
			$("#edit_id_kota").val(data.id_kota);
			$("#data_foto").html('<img src="<?php echo base_url(); ?>assets/img_guide/' + data.foto + '" width="50px" >');
		});
	}
</script>