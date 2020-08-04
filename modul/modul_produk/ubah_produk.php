<?php 
	if (isset($_GET)) {
		$id_produk = $_GET['id'];
		$detail_produk = mysql_query("SELECT * FROM produk WHERE id_produk = '$id_produk'");
	}
?>
<div class='content-wrapper'>
    <div class='content-header'>
        <center><h2 class='m-0 text-dark'>Ubah Data Produk</h2></center>
    </div>
    <hr>
    <form method="POST" action="update-produk.html">
    	<?php while ($data = mysql_fetch_array($detail_produk)):?>
    		<input type="hidden" name="id_produk" id="id_produk" value="<?php echo $data['id_produk']; ?>">
            <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?php echo $data['nama_produk']?>" required="">
            </div>
    		<div class="form-group" style="margin-left: 10px; margin-right: 10px;">
    			<label for="keterangan">Keterangan</label>
    			<textarea name="keterangan" class="form-control" id="keterangan"><?php echo $data['keterangan'];?></textarea>
    		</div>
    		<div class="form-group" style="margin-left: 10px; margin-right: 10px;">
    			<label for="harga">Harga</label>
    			<input class="form-control" type="text" name="harga" id="harga" value="<?php echo $data['harga'];?>">
    			</div>
            <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
            	<label for="jumlah">Jumlah</label>
	            <input type="text" class="form-control" name="jumlah" id="jumlah" value="<?php echo  $data['jumlah']; ?>">
	        </div>
        <?php endwhile;?>
    	<button type="submit" id="ubah" name="ubah" class="btn btn-primary" style="margin-left: 10px;">ubah</button>
    	<a href="view-produk.html" class="btn btn-primary">Batal</a>
    </form>
</div>