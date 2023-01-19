<div class="navbar navbar-default navbar-fixed-top" id="topnav" style="height:70px;">
		<div class="container-fluid" style="margin-top: 10px;">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand"><img class="logo-img" src="uploads/images/logo_transparent.png" alt="Logo-ul nu a fost incarcat" style="width:65px;height:57px;position:absolute;top:6px;left:35px;"/></a>
			</div>
			

			<div class="nav navbar-nav">
				<div class="search" style="margin-left: 237px;">
					<div style="width:250px;"><input type="text" class="form-control" id="search" name="search" placeholder="Caută un produs aici"></div>
					<div><button type="button" class="btn btn-primary" id="search_btn" name="" ><span class='glyphicon glyphicon-search'></span></button></div>
				</div>
			</div>

			<ul class="nav navbar-nav navbar-right">	 
				<li><a href="index.php"><span class="glyphicon glyphicon-home" style="margin-right:3px;"></span>Acasă</a></li>							
				<li><a href="about.php"><span class="glyphicon glyphicon-user" style="margin-right:3px;"></span>Despre noi</a></li>
				<li><a href="contact.php"><span class="glyphicon glyphicon-envelope" style="margin-right:3px;"></span>Contact</a></li>

				<?php if(!isset($_SESSION['loggedin'])){?>
				<li><a href="login.php" ><span class="glyphicon glyphicon-user"></span>Conectare</a></li>		
				<li><a href="register.php">Înregistrare</a></li>
			</ul>
			<?php }else{ ?>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Bine ai venit, <?php echo $_SESSION['user_nume']; ?></a>
				<ul class="dropdown-menu">
					<li><a href="logout.php">Delogare</a></li>
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
    			margin-top: 10px;
			}
			</style>