<?php
	session_start();
	include('dbconnect.php');

if(ISSET($_GET['id'])){
	$product_id = $_GET['id'];
	$queryProduct = ("SELECT * FROM products WHERE product_id= '$product_id' LIMIT 1");
	$query_run = mysqli_query($conn, $queryProduct);
								if($data = mysqli_fetch_array($query_run)){
									$product_id1 = $data["product_id"];	
									$product_title1 = $data["product_title"];
									$product_price1 = $data["product_price"];
									$product_desc1 = $data["product_desc"];
									$product_image1 = $data["product_image"];
							 } 					
                             
}

?>

<!DOCTYPE html>
<html>

<head>

  <!-- Fonts -->
  <meta charset="utf-8">
	<title>Delicate Nails</title>
	<link rel="stylesheet" type="text/css" href="uploads/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style/styles.css?version=4">
	<link rel="icon" type="image/x-icon" href="uploads/images/logo_transparent.png">
  <link rel="stylesheet" type="text/css" href="uploads/product.css?version=5">

</head>

<body style="  background-image: url('uploads/images/background4.png'); 
               background-repeat: no-repeat; 
               background-attachment: fixed; 
               background-size: 100% 100%;">
<?php include 'includes/meniu.php'; ?>
  <main class="container">
    <div class="left-column">
      <img src="<?= $product_image1;?>" alt="" style="height:40rem;">
    </div>
    <div class="right-column">
      <div class="product-description">
        <h1><?= $product_title1;?></h1>
        <p><?= $product_desc1;?></p>
      </div>
      <div class="product-configuration">

      <div class="product-price">
        <span><?= $product_price1;?> Lei</span>
				<input type="hidden" name="pid" value="<?= $product_id1?>">
			    <button  class="btn btn-success " style="float:right;">Adaugă în coș</button>
      </div>
    </div>
  </main>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
	<script src="uploads/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
