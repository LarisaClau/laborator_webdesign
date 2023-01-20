
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

if(isset($_POST['login'])) {
	$email=$_POST['email'];
	$password=$_POST['password'];

	//Verificam daca datele introduse corespund unui utilizator
		$select_user = mysqli_query($conn, "SELECT * FROM user_info WHERE email = '$email' AND password = '$password'") ;

		if(mysqli_num_rows($select_user) > 0){
            $row = mysqli_fetch_assoc($select_user);
            $_SESSION['user_nume'] = $row['first_name'];
            $_SESSION['user_prenume'] = $row['last_name'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['uid'] = $row['user_id'];
            $_SESSION['loggedin'] = true;
            header('location:index.php');
		}
		else {
                    echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Datele introduse nu sunt corecte, incercati din nou!</b>
			</div>
		";
			}
		}
?>

		</div>
	</div>
	<p><br><br></p>
	<p><br><br></p>
	
	<div class="container-fluid" style="margin-top: 50px;">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="err_msg"></div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading" style="background-color: #ed7bc2;">Logare</div>
					<div class="panel-body">
					<form method="POST">
					<div class="row">
						<div class="col-md-12">
							<label for="email">Email</label>
							<input type="email" id="email" name="email" class="form-control" required placeholder="nume.prenume@yahoo.com"></br>
						</div>
						<div class="col-md-12">
							<label for="password">Parolă</label>
							<input type="password" id="password" name="password" class="form-control" required placeholder="********">
						</div>
					</div>
					<br><br>
					<div class="col-md-12 login">
						<input type="SUBMIT" name="login" class="btn btn-primary" value="Logare" style="background-color: #ed7bc2;">
					</div>
					<p></br> Doriti sa va inregistrati? Apăsați <b><a href='register.php'>aici</a></b> pentru a vă inregistra. </p>
					</div>
				
					</form>
</div>
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

.panel-body {
    display: flex;
    justify-content: center;
    align-items: center;
}

.login {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 23px;
}
</style>
</html>
