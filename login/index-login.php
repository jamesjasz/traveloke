<?php
include '../proc/conn.php';	
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travel Agency Database Kalbis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Menyisipkan Bootstrap -->
	<link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/bootstrap.css" />
	<script src="../js/jquery-3.3.1.min.js"></script>
</head>

<body>

    <!-- Membuat komponen jubotron sebagai header -->
    <header>
        <div class="jumbotron jumbotron-fluid" bgcolor = "blue">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>Traveloke</h1>
                    </div>
					<div class="col" >
                        <nav class="navbar navbar-expand-lg navbar-light bg-travel" >
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<a class="nav-link" href="index-login.php">Home <span class="sr-only">\</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="aboutus.php">About Us</a>
							</li>
						</ul>
						<div class="dropdown">
					  <a class="btn btn-info" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<ul class="nav navbar-nav navbar-right">	
							<?php 
									echo $_SESSION['login_user'];
							?>
						</ul>
					  </a>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="lihat_pesanan.php">Pesanan Anda</a>
						<a class="dropdown-item" href="../proc/proc_logout.php">Log Out</a>
					  </div>
					</div>
					</div>
						</nav>

                    </div>
					
						
                </div>
				
				
            </div>
        </div>
    </header>
	
<div class="jumbotron-isi tengah jumbotron-fluid ">
	<div class ="row">
		<div class="col" style="margin-top: 48px;" >
			<div style="margin-left : 90px; margin-top: 0px;"> 
				<a href="pemesanan-kereta.php">
					<img src="../gambar/kereta.png" width="200px" height ="200px"  >
					<h2 style="margin-left:50px;"><a href="pemesanan-kereta.php">KERETA</a></h2>
				</a>
			</div>
			<div style="margin-left : 500px; margin-top: -248px;">
				<a href="pemesanan.php">
					<img src="../gambar/pesawat.png" width="200px" height ="200px">
					<h2 style="margin-left: 34px;"> <a href="pemesanan.php">PESAWAT</a> </h2>
				</a>
			</div>	
		</div>
		<div class="hotel">
				<a href="pemesanan-hotel.php">
					<img src="../gambar/hotel.png" width="200px" height ="200px"  >
					<h2 style="margin-left:50px;">Hotel</h2>
				</a>
			</div>		
	</div>
</div>


<footer class="jumbotron-footer">
<div >
</div>
</footer>
 <!-- Menyisipkan JQuery dan Javascript Bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>