<?php
  include "config/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Arkademy</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<script src="numeral/numeral.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
	<script src="jquery/jquery.js"></script>
  <script src="jquery/jquery-3.4.1.min.js"></script>
  <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class='navbar navbar-expand-lg navbar-light bg-warning mb-3'>
    <a class='navbar-brand' href='#'>Arkademy</a>
    <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
      <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse' id='navbarNavDropdown'>
      <ul class='navbar-nav'>
        <li class='nav-item active'>
          <a class='nav-link' href='home.html'>Home</a>
        </li>
        <li class='nav-item dropdown'>
          <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
            Master
          </a>
          <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
            <a class='dropdown-item' href='view-produk.html'>Produk</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
	<?php include "content.php"?>

</body>
</html>