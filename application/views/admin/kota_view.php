<!-- MAIN CONTENT -->
<div class="main">
<div class="main-content">
				<div class="container-fluid">
				<h3 class="page-title">Daftar Kota</h3>
			<div class="row"></div>
			<div class="text-right" style="padding-bottom:20px">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalkota">Tambah kota</button>
            </div>
			<div class="panel">
				<div class="panel-body">
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama Kota</th>
								<th>Photo</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($kota as $items): ?>
							<tr>
								<td><?= $items->id_kota?></td>
								<td><?= $items->nama_kota?></td>
								<td><img src="<?= base_url('assets/img_city/'.$items->photo);?>" alt="" width="100px"></td>
								<td>
                            	
								<a href="#ubah" class="btn btn-primary" data-toggle="modal" class="btn btn-warning" 
							onclick="prepare_edit_kota(<?= $items->id_kota?>)">Edit</a>

                            <a href="<?= base_url('Admin/Kota/delete_kota/'.$items->id_kota) ?>" onclick="return confirm('Anda Yakin?')" 
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
<div class="modal fade" id="modalkota" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Tambah kota</h4>
            </div>
            <form action="<?= base_url('admin/Kota/add_Kota') ?>" method="post" enctype="multipart/form-data">
          <div class="modal-body">
                  <input type="text" class="form-control" name="nama_kota" placeholder=" Nama Kota">
                  <br>
                  <input type="file" class="form-control" name="photo" placeholder="">
                  <br>                             
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
      </div>
    </div>    
	</div>
</div>


<!-- Modal Tambah -->
<div class="modal fade" id="ubah">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Edit Kota</h4>
			</div>
			<div class="modal-body">
				<form action="<?=base_url('Admin/Kota/edit')?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="edit_id_kota" id="edit_id_kota">
					Nama Kota
                    <input type="text" name="edit_nama_kota" id="edit_nama_kota" class="form-control">
					<br>Cover
					<div id="data_photo"></div>
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
<!-- END MAIN CONTENT -->

<script>
	function prepare_edit_kota(id_kota)
	{
		$.getJSON('<?php echo base_url(); ?>admin/Kota/get_data_kota_by_id/' + id_kota,  function(data){
			$("#edit_id_kota").val(data.id_kota);
			$("#edit_nama_kota").val(data.nama_kota);
			$("#data_photo").html('<img src="<?php echo base_url(); ?>assets/img_city/' + data.photo + '" width="100px" >');
		});
	}
</script>	