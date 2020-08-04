<?php
	// echo var_dump($_GET);
	// die;
	$query = "DELETE FROM produk WHERE id_produk = '".$_GET['id']."'";
	$result = mysql_query($query);
	if ($result) {
    	echo 
    		"<script>
    			alert('Berhasil Menghapus');
    			window.location.href = 'view-produk.html';
    		</script>";
	}else{
		echo 
    		"<script>
    			alert('Gagal Menghapus');
    			window.location.href = 'view-produk.html';
    		</script>";
	}
?>