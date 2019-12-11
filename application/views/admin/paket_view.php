
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
				<h3 class="page-title">Daftar Paket</h3>
			<div class="row"></div>
			<div class="text-right" style="padding-bottom:20px">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalMenu">Tambah Paket</button>
            </div>
			<div class="panel">
			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
                            <th>Nama Paket</th>
                            <th>Harga</th>
							<th>Lama Hari</th>
                            <th>Aksi</th>
						</tr>
					</thead>
					<tbody>

                   

                    <?php foreach ($paket as $items): ?>
                        <tr>
                            <td><?= $items->id_paket?></td>
                            <td><?= $items->nama_paket?></td>
                            <td><?= $items->harga?></td>
							<td><?= $items->lama_hari?></td>
                            <td>
                            <a href="#ubah" class="btn btn-primary" data-toggle="modal" class="btn btn-warning" 
                            onclick="prepare_edit_paket(<?= $items->id_paket?>)">Edit</a>

							<a href="<?= base_url('Admin/Paket/delete_paket/'.$items->id_paket) ?>" onclick="return confirm('Anda Yakin?')" 
							class="btn btn-danger"><i class="lnr lnr-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
					</tbody>
                </table>
            </div>

            <div class="modal fade" id="modalMenu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Tambah paket</h4>
                  </div>
                  <form action="<?= base_url('admin/Paket/add_paket') ?>" method="post">
                      <div class="modal-body">
                        <input type="text" class="form-control" name="nama_paket" placeholder="Paket">
                        <br>
                        <input type="number" class="form-control" name="harga" placeholder="Harga">
						<br>
                        <input type="text" class="form-control" name="lama_hari" placeholder="Lama Hari">
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

			<!-- END MAIN CONTENT -->

            <!-- Modal Ubah -->
<div class="modal fade" id="ubah">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Ubah</h4>
			</div>
			<div class="modal-body">
				<form action="<?=base_url('Admin/Paket/edit')?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="edit_id_paket"  id="edit_id_paket">
					 Nama Paket
                    <input type="text" name="edit_nama_paket" id="edit_nama_paket" class="form-control">
					<br> Harga
					<input type="text" name="edit_harga" id="edit_harga" class="form-control">
					<br> Lama Hari
					<input type="text" name="edit_lama_hari" id="edit_lama_hari" class="form-control">
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
	function prepare_edit_paket(id_paket)
	{
		$.getJSON('<?php echo base_url(); ?>admin/Paket/get_data_paket_by_id/' + id_paket,  function(data){
			$("#edit_id_paket").val(data.id_paket);
            $("#edit_nama_paket").val(data.nama_paket);
			$("#edit_harga").val(data.harga);
			$("#edit_lama_hari").val(data.lama_hari);
		});
	}
</script>
	