<?php
	// echo var_dump($_POST);
	// die;
	$query = "UPDATE produk SET id_produk = '".$_POST['id_produk']."', keterangan = '".$_POST['keterangan']."', harga = '".$_POST['harga']."', jumlah = '".$_POST['jumlah']."' WHERE id_produk = '".$_POST['id_produk']."'";
	$result = mysql_query($query);
	if ($result) {
    	echo 
    		"<script>
    			alert('Berhasil Mengubah');
    			window.location.href = 'view-produk.html';
    		</script>";
	}else{
		echo 
    		"<script>
    			alert('Gagal Mengubah');
    			window.location.href = 'view-produk.html';
    		</script>";
	}
?>