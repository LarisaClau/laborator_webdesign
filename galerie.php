<?php
	session_start();
	include('dbconnect.php');
 ?>

<!DOCTYPE html>
<html land="ro">
<head>
	<meta charset="utf-8">
	<meta name="title" content="Delicate Nails - produse profesionale pentru manichiura">
	<meta name="description" content="La Delicate Nail gasesti o gama larga de produse pentru unghii de caliate de o gama larga de producator!">
	<meta name="keywords" content="produse manichiura, produse pedichiura, oje semi, geluri uv, baze, topuri">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Magdas Larisa-Claudia">
	<title>Delicate Nails</title>
	<link rel="stylesheet" type="text/css" href="uploads/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="uploads/galerie.css?version=55">
	<link rel="icon" type="image/x-icon" href="uploads/images/logo_transparent.png">

	

</head>
<body>

<?php include 'includes/meniu.php';
      include 'includes/message.php';
?>
	
  <h1 class="title">Galerie imagini</h1>
    <table>
  <tr>
    <td><img src="uploads/images/galerie1.jpg" width="300" height="300"></td>
    <td><img src="uploads/images/galerie2.jpg" width="300" height="300"></td>
    <td><img src="uploads/images/galerie3.jpg" width="300" height="300"></td>
  </tr>
  
  <tr>
    <td><img src="uploads/images/galerie4.jpg" width="300" height="300"></td>
    <td><img src="uploads/images/galerie5.jpg" width="300" height="300"></td>
    <td><img src="uploads/images/galerie6.jpg" width="300" height="300"></td>
  </tr>

  <tr>
    <td><img src="uploads/images/galerie7.jpg" width="300" height="300"></td>
    <td><img src="uploads/images/galerie8.jpg" width="300" height="300"></td>
    <td><img src="uploads/images/galerie9.jpg" width="300" height="300"></td>
  </tr>
</table>
</body>

<?php
	include('includes/footer.php');
 ?>
</html>


