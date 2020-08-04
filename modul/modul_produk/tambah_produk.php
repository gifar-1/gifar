<div class='content-wrapper'>
    <div class='content-header'>
        <center><h2 class='m-0 text-dark'>Tambah Produk</h2></center>
    </div>
    <hr>
    <form method="POST" action="insert-produk.html">
        <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
            <label for="nama_produk">Nama Produk</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Masukan Nama Produk" required="">
        </div>
    	<div class="form-group" style="margin-left: 10px; margin-right: 10px;">
    		<label for="keterangan">Keterangan</label>
    		<textarea name="keterangan" class="form-control" placeholder="Masukan Keterangan" required=""></textarea>	
    	</div>
    	<div class="form-group" style="margin-left: 10px; margin-right: 10px;">
    		<label for="harga">Harga</label>
    		<input type="number" min="0" class="form-control" id="harga" name="harga" placeholder="Masukan Harga" required="">
    	</div>
    	<div class="form-group" style="margin-left: 10px; margin-right: 10px;">
    		<label for="jumlah">Jumlah</label>
    		<input  type="number" min="1" class="form-control" id="jumlah" name="jumlah" placeholder="Masukan Jumlah" required=""></textarea>
    	</div>
        <button type="submit" id="simpan" name="simpan" class="btn btn-primary" style="margin-left: 10px;">Simpan</button>
    </form>
</div>