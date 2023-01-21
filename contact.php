<?php
	session_start();
	include('dbconnect.php');
  include 'includes/meniu.php';
  include('includes/message.php');

// Trimitere mesaj in baza de date
    if(isset($_POST['send_mail'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $text=$_POST['text'];
 
     $sql="INSERT INTO messages(name,email,message) VALUES('$name','$email','$text')";
     $run_query = mysqli_query($conn,$sql);
        if($run_query){
            $_SESSION['message']= "Mesajul a fost trimis cu succes! Veți primi un răspuns în curând.";
            header('location:index.php');
         }else{
            $_SESSION['message']= "Mesajul nu a fost trimis. Incearcă din nou mai târziu!";
        }
      }


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
  <link rel="icon" type="image/x-icon" href="uploads/images/logo_transparent.png">
	<link rel="stylesheet" type="text/css" href="uploads/bootstrap-3.3.6-dist/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="uploads/contact.css?version=12">
	<link rel="stylesheet" type="text/css" href="uploads/style.css?version=12">
</head>

<body style="  background-image: url('uploads/images/background4.png'); 
               background-repeat: no-repeat; 
               background-attachment: fixed; 
               background-size: 100% 100%;">
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Adresa</div>
          <div class="text-one">Brasov, Romania</div>
          <div class="text-two">Strada Plevnei Numarul 16</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Telefon</div>
          <div class="text-one">0746 267 721</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">delicatenails@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Contacteaza-ne</div>
        <p>Daca aveti vreo problema sau nelamurire, nu ezitati sa ne trimiteti un mesaj folosind campurile de mai jos!
        </p>
        <form action="" method="POST">
          <div class="input-box">
            <input type="text" name="name" placeholder="Nume" required>
          </div>
          <div class="input-box">
            <input type="email" name="email" placeholder="Email" required>
          </div>
          <div class="input-box message-box">
            <textarea placeholder="Mesajul dvs" name="text" required></textarea>
          </div>
          <div class="submit">
            <input type="submit" name="send_mail" style=" color: #fff;font-size: 18px;outline: none;border: none;padding: 8px 16px;border-radius: 6px;background: #ed7bc2;cursor: pointer;transition: all 0.3s ease;" value="Trimite">
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
<style>
			.search {
				display: flex;
    			justify-content: center;
    			align-items: center;
    			margin-top: 2px;
			}

			.navbar-default .navbar-nav > .open > a {
				background:white!important;
			}

			.navbar-default .navbar-nav > li > a:hover {
				color: white;
			}

			.navbar-default .navbar-nav > li > a {
				color: black;
			}


			</style>


