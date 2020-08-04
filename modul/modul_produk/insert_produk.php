<?php
	// echo var_dump($_POST);
	// die;
	$nama_produk = $_POST['nama_produk'];
	$keterangan = $_POST['keterangan'];
	$harga = $_POST['harga'];
	$jumlah = $_POST['jumlah'];
	$query = "INSERT INTO produk (nama_produk, keterangan, harga, jumlah) VALUES ('$nama_produk','$keterangan','$harga','$jumlah')";
	$result = mysql_query($query);
	if ($result) {
    	echo 
    		"<script>
    			alert('Berhasil Menyimpan');
    			window.location.href = 'view-produk.html';
    		</script>";
	}else{
		echo 
    		"<script>
    			alert('Gagal Menyimpan');
    			window.location.href = 'view-produk.html';
    		</script>";
	}
?>