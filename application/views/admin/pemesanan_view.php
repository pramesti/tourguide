
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
				<h3 class="page-title">Daftar Pemesan</h3>
			<div class="row"></div>
			<div class="text-right" style="padding-bottom:20px">
            </div>
			<div class="panel">
			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>Nama User</th>
                            <th>Email</th>
							<th>Paket</th>
							<th>Lama Hari</th>
							<th>Harga</th>
                            <th>Nama Guide</th>
							<th>No. Telp Guide</th>
                            <th>Tanggal Pemesanan</th>
							<th>Status</th>
							<th>Bukti Transfer</th>
                            <th>Aksi</th>
						</tr>
					</thead>
					<tbody>
                    
                    <?php 
                        foreach ($transaksi as $t): ?>
                        <tr>
                        <td><?= $t->nama_user?></td>
                        <td><?= $t->email?></td>
						<td><?= $t->nama_paket?></td>
						<td><?= $t->lama_hari?></td>
						<td><?= $t->harga?></td>
						<td><?= $t->nama?></td>
						<td><?= $t->telp_guide?></td>
                        <td><?= $t->jadwal?></td>
						<td><?= $t->status?></td>
						<td><img src="<?= base_url('assets/img_transfer/'.$t->file);?>" alt="belum transfer" width="100px"></td>
                        
                            <td>
                            <a href="#verif" class="btn btn-primary" data-toggle="modal" class="btn btn-warning" 
							onclick="prepare_edit_transaksi(<?= $t->id_transaksi?>)">Verifikasi</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
					</tbody>
                </table>
            </div>
            </div>
        </div>
<!-- END MAIN CONTENT -->


<!-- Modal Verifikasi -->
<div class="modal fade" id="verif">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Verifikasi </h4>
			</div>
			<div class="modal-body">
				<form action="<?=base_url('Admin/Transaksi/verif')?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="edit_id_transaksi" id="edit_id_transaksi">

                    <br> Status
					<select name="edit_id_status" id="edit_id_status" class="form-control">
						<?php
				foreach ($status as $s) {
					echo "<option value= '".$s->id_status."'>
					".$s->status."
					</option>";
				}
				 ?>
					</select>
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
	function prepare_edit_transaksi(id_transaksi)
	{
		$.getJSON('<?php echo base_url(); ?>admin/Transaksi/get_data_transaksi_by_id/' + id_transaksi,  function(data){
			$("#edit_id_transaksi").val(data.id_transaksi);
            $("#edit_id_status").val(data.id_status);
		});
	}
</script>	