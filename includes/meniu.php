
<link rel="stylesheet" type="text/css" href="uploads/style.css">

<div class="navbar navbar-default navbar-fixed-top" id="topnav" style="height: 70px; background-color: hsla(324, 65%, 73%, 0.5)">
		<div class="container-fluid" style="margin-top: 10px;">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand"><img class="logo-img" src="uploads/images/logo_transparent.png" alt="Logo-ul nu a fost incarcat" style="width:65px;height:57px;position:absolute;top:-11px;left:35px;"/></a>
			</div>
			

            <!--bara de search-->
			<div class="nav navbar-nav">
				<div class="search" style="margin-left: 150px;">
					<div style="width:240px;"><input type="text" class="form-control" id="search" name="search" placeholder="Caută un produs aici"></div>
					<div><button type="button" class="btn btn-primary" id="search_btn" style="background: #e253c3;"><span class='glyphicon glyphicon-search'></span></button></div>
				</div>
			</div>

            <!--butoane bara de navigare-->
			<ul class="nav navbar-nav navbar-right" style="font-size: 18px;">	 
				<li><a href="index.php">Acasă</a></li>							
				<li><a href="galerie.php">Galerie</a></li>
				<li><a href="contact.php">Contact</a></li>

				<?php if(!isset($_SESSION['loggedin'])){?>
				<li><a href="login.php">Conectare</a></li>		
				<li><a href="register.php">Înregistrare</a></li>
			</ul>
			<?php }else{ ?>
				<li class="test"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" style="margin-right: 8px"></span>Bine ai venit, <?php echo $_SESSION['user_nume']; ?>!</a>
				<ul class="dropdown-menu" style="color: white;" >
					<li><a href="logout.php"><strong>Delogare</strong></a></li>
				</ul>

				</li>
				<?php }?>
		</div>
	</div>
		<br><br><br>


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

