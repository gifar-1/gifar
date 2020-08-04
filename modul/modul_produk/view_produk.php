<?php
	$data_produk = mysql_query("SELECT * FROM produk");
?>
<div class='content-wrapper'>
    <div class='content-header'>
        <center><h2 class='m-0 text-dark'>Data Produk</h2></center>
    </div>
    <hr>
	<div class="table-responsive-sm" style="margin-left: 10px; margin-right: 10px;">
		<a href="tambah-produk.html" type="button" class="btn btn-primary" style="margin-bottom: 10px;">Tambah</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">Nama Produk</th>
					<th scope="col">Keterangan</th>
					<th scope="col">Harga</th>
					<th scope="col">Jumlah</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no = 1;
				while ($data = mysql_fetch_array($data_produk)){
					echo "<tr>
					   		  <td>".$no++.".</td>
						      <td>$data[nama_produk]</td>
						      <td>$data[keterangan]</td>
						      <td>".number_format($data['harga'])."</td>
						      <td>$data[jumlah]<t/d>
						      <td>
						          <a href='ubah-produk-$data[id_produk].html' type='button' class='btn btn-warning'>Ubah</a>
						          <a href='delete-produk-$data[id_produk].html' type='button' class='btn btn-danger'>Hapus</a>
						      </td>
						  </tr>
					";

				}
				?>
			</tbody>
		</table>
	</div>
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Data Siswa</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="siswa_kelas">
						<label>Cetak Data Siswa Berdasarkan:</label>
						<select name="kelas" id="kelas" class="form-control" required="">
						<?php 
							$data_kelas = mysql_query("SELECT * FROM KELAS ORDER BY nama_kelas ASC");
							while ($kelas = mysql_fetch_array($data_kelas)):
						?>
							<option value="<?php echo $kelas['id_kelas']; ?>"><?php echo $kelas['nama_kelas']; ?></option>
						<?php endwhile; ?>
						</select>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" id="cetak_siswa" class="btn btn-primary">Cetak</button>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
	var myWindow;
	$('#cetak_siswa').click(function(){
		$.ajax({
    		type: 'POST',
    		url: 'fetch_kelas.php',
    		data: $('#siswa_kelas').serialize(),
    		success: function(data){
    			myWindow = window.open("", "myWindow");
  				myWindow.document.write(data);
    			console.log(data);
    		}
    	})
	})
    	//console.log(NO_URUT);
</script>