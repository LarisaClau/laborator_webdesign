
<?php 
include('dbconnect.php');
session_start();

if(isset($_SESSION['uid'])){
    header('Location: index.php');
}


?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Delicate Nails</title>
	<link rel="stylesheet" type="text/css" href="uploads/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style/styles.css?version=7">
	<link rel="icon" type="image/x-icon" href="logo_transparent.png">
</head>
<body style="  background-image: url('uploads/images/background4.png'); 
               background-repeat: no-repeat; 
               background-attachment: fixed; 
               background-size: 100% 100%;">
	<div class="navbar navbar navbar-fixed-top" id="topnav">
		<div class="container-fluid">

<?php
include 'includes/meniu.php';

if(isset($_POST['submit'])) {
	$f_name=$_POST['f_name'];
	$l_name=$_POST['l_name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$mobile=$_POST['mobile'];
	$address=$_POST['address'];


	if(empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($mobile) || empty($address)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Vă rugăm completați toate câmpurile!</b>
			</div>
		";
		}elseif(strlen($password) < 4 ){
			$_SESSION['message']= "Produsuls";
		}elseif(!(strlen($mobile) == 10)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Numărul de telefon trebuie să conțină 10 cifre!</b>
			</div>
		";
		
		}else{

		//Verificam daca exista deja un utilizator cu emailul introdus
		$sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1" ;
		$check_query = mysqli_query($conn,$sql);
		$count_email = mysqli_num_rows($check_query);

		if($count_email > 0){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Adresa de email este deja folosită, încearcă altă adresă!</b>
			</div>
		";
		
		}
		else {
					$sql="INSERT INTO user_info (first_name, last_name, email, password, mobile, address) VALUES ('$f_name','$l_name','$email','$password','$mobile','$address')";
					$run_query=mysqli_query($conn,$sql);
					if($run_query){
						echo "
								<div class='alert alert-success'>
									<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
									Ați fost înregistrat cu succes folosind adresa de email $email .Apăsați <b><a href='login.php'>aici</a></b> pentru a vă conecta.
								</div>
						";
					}
			}
		}
	}
?>

		</div>
	</div>
	<p><br><br></p>
	<p><br><br></p>
	
	<div class="container-fluid" style="margin-top: 20px;">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="err_msg"></div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading " style="background-color: #ed7bc2;">Înregistrare</div>
					<div class="panel-body">
					<form method="POST">
					<div class="row">
						<div class="col-md-6">
							<label for="f_name">Nume</label>
							<input type="text" id="f_name" name="f_name" required class="form-control" placeholder="ex: Magdas">
						</div>
						<div class="col-md-6">
							<label for="f_name">Prenume</label>
							<input type="text" id="l_name" name="l_name" class="form-control" required placeholder="ex: Larisa">
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<label for="email">Email</label>
							<input type="email" id="email" name="email" class="form-control" required placeholder="ex: nume.prenume@yahoo.com">
						</div>
						<div class="col-md-6">
							<label for="password">Parolă</label>
							<input type="password" id="password" name="password" class="form-control" required placeholder="Minim 4 caractere">
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<label for="mobile">Telefon</label>
							<input type="number" id="mobile" name="mobile" class="form-control" required placeholder="10 cifre">
						</div>
						<div class="col-md-6"></div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<label for="address">Adresă</label>
							<input type="textarea" id="address" name="address" class="form-control" required placeholder="Adresa trebuie să conțină județul, orașul, strada și blocul">
						</div>
					</div>

					<br><br>
					<div class="col-md-12">
						<input type="SUBMIT" name="submit" class="btn btn-primary" value="Înregistrare" style="background-color: #ed7bc2;">
					</div>
					</br></br> 
					<p>Aveți deja cont? Apăsați <b><a href='login.php'>aici</a></b> pentru a vă conecta. </p>
					</div>
					</div>
				
					</form>
					
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>





	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
	<script src="uploads/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script src="main.js"></script>
	
</body>
<?php
	include('includes/footer.php');
 ?>
 <style>
	.page-footer {
    position: fixed;
    bottom: 0;
    width: 100%;
}
 </style>
</html>
