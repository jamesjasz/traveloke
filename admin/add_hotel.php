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
	<link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
</head>

<body>
	<div class="sidenav">
	  <a href="index.php">Home</a>
	  <a href="booking.php">Booking</a>
	  <a href="hotel.php">Hotel</a>
	  <a href="kereta.php">Kereta</a>
	  <a href="laju.php">Laju</a>
	  <a href="login.php">Login</a>
	  <a href="pemesanan.php">Pemesanan</a>
	  <a href="penerbangan.php">Penerbangan</a>
	  <a href="pesawat.php">Pesawat</a>
	  <a href="class.php">Seat Class</a>
	  <a href="tujuan.php">Tujuan</a>
	</div>
	
	 <div class="main">
		<div class="header-menu float-right">
			<div class="col-sm-12">
				<div class="dropdown">
					<a class="btn btn-default" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<ul class="nav navbar-nav navbar-right">	
							<?php 
								echo $_SESSION['login_user'];
							?>
						</ul>
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="../proc/proc_logout.php">Log Out</a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header">
                    <div class="page-title">
                        <h1 class="page-header">Hotel</h1>
                    </div>
                </div>
            </div>
        </div>
		
	<div class="content mt-2">

           <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Add</strong>
                        </div>
                        <div class="card-body">
						<form name="form1" method="post" action="../proc/proc_add_hotel.php">
                            <table class="table" border="0">
								<tr>
									<th>Nama Hotel</th>
									<th><input type="text" name="nama_hs"></th>
								</tr>
								<tr>
									<th>Foto</th>
									<th><input type="text" name="fotos"></th>
								</tr>
								<tr>
									<th>Daerah</th>
									<th><input type="text" name="daerahs"></th>
								</tr>
								<tr>
									<th>Lokasi</th>
									<th>
										<select name="lokasis">
											<option value="Jakarta">Jakarta</option>
											<option value="Bali">Bali</option>
										</select>
									</th>
								</tr>
								<tr>
									<th>Harga Hotel</th>
									<th><input type="text" name="harga_hs"></th>
								</tr>
								<tr>
									<th><input type="hidden" name="no_hotel"></th>
									<th><input type="submit" name="add" value="Add"></th>
								</tr>
                            </table>
						</form>
                        </div>
                    </div>
                </div> <!-- ISI BAGIAN INI -->	
			
        </div> <!-- .content -->
				
				
			
        </div> <!-- .content -->

     </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>