<?php
	session_start();
	include('dbconnect.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Delicate Nails</title>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="uploads/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style/styles.css?version=11">
	<link rel="icon" type="image/x-icon" href="uploads/images/logo_transparent.png">

	

</head>
<body>

<?php include 'includes/meniu.php';
include('includes/message.php');?>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
			<div id="get_cat"></div>
				<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categorii</h4></a></li>
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
				
					<div class="panel-heading text-center"><h2><strong>Produse disponibile</strong></h2>
					</div>
					<div class="panel-body">
					
						
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
<style> .foot{text-align: center;}
</style>
</html>


