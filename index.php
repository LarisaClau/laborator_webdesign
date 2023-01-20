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
	<link rel="stylesheet" type="text/css" href="uploads/style.css?version=55">
	<link rel="icon" type="image/x-icon" href="uploads/images/logo_transparent.png">

	

</head>
<body style="  background-image: url('uploads/images/background4.png'); 
               background-repeat: no-repeat; 
               background-attachment: fixed; 
               background-size: 100% 100%;">

<?php include 'includes/meniu.php';
      include 'includes/message.php';
?>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
			<div id="get_cat" ></div>
				<div class="nav nav-pills nav-stacked" style="background: #e394d2">
					<li class="active"><a href="#" style="background: #e253c3; color: black;"><h3 style="line-height: 0.5"><b>Categorii</b></h3></a></li>
					<?php
				    //Afisare categorii
				    $queryCategory = ("SELECT * FROM categories");
				    $query_run = mysqli_query($conn, $queryCategory);
				    while($data = mysqli_fetch_array($query_run)){
					$cat_id = $data["cat_id"];
					$cat_title = $data["cat_title"];
				    ?>
					<li><a href="index.php?categ=<?= $cat_id;?>"><?= $cat_title ?></a></li>
				
					<?php } ?>
				</div>
				<div id="get_brand"></div>	
			</div>
			<div class="col-md-8">
				<div class="panel panel-info"> 
				
					<div class="panel-heading text-center" style="background: #f59ad9; color: black; "><h2 style="line-height: 0.5" ><strong>Produse disponibile</strong></h2>
					</div>
					<div class="panel-body">
					<div id="get_product"></div>
						<?php
							//Afisare produse
							if(ISSET($_GET['categ'])){
								$category_id = $_GET['categ'];
								$queryProducts = ("SELECT * FROM products WHERE product_cat= '$category_id'");
							
							}
							
							if(!ISSET($_GET['categ'])){
								$queryProducts = ("SELECT * FROM products");
							}
								$query_run3 = mysqli_query($conn, $queryProducts);
								while($data = mysqli_fetch_array($query_run3)){
									$product_id = $data["product_id"];
									$product_cat = $data["product_cat"];
									$product_title = $data["product_title"];
									$product_price = $data["product_price"];
									$product_desc = $data["product_desc"];
									$product_image = $data["product_image"];
							?>
									<div class="col-md-4">
										<div class="panel panel-info">
											<a href="product.php?id=<?= $product_id; ?>" style="text-decoration:none!important"> 
											<div class="panel-heading"><?= $product_title; ?></div>
											<div class="panel-body"><img src="<?= $product_image;?>" width="218px" height="250"></div>
											<button class="btn btn-xs" style="float: right; margin-right: 3px; font-size: 15px; background: #9fc5e8;">Vezi produsul</button>
											<div class="panel-heading" style="font-size:18px;"><?= $product_price ;?> Lei 
											
											</div>
										</div>
									</div>
							<?php } ?>
						
					</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</div>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
	<script src="uploads/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
</body>

<?php
	include('includes/footer.php');
 ?>
<style> 
.foot{
	text-align: center;
	}
</style>
</html>


