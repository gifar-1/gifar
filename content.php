<?php
	if ($_GET['module']=='home'){
		include "home.php";
	}elseif ($_GET['module']=='view_produk') {
		include "modul/modul_produk/view_produk.php";
	}elseif ($_GET['module']=='tambah_produk') {
		include "modul/modul_produk/tambah_produk.php";
	}elseif ($_GET['module']=='insert_produk') {
		include "modul/modul_produk/insert_produk.php";
	}elseif ($_GET['module']=='ubah_produk') {
		include "modul/modul_produk/ubah_produk.php";
	}elseif ($_GET['module']=='update_produk') {
		include "modul/modul_produk/update_produk.php";
	}elseif ($_GET['module']=='delete_produk') {
		include "modul/modul_produk/delete_produk.php";
	}
?>