<?php
include '../proc/conn.php';	
include '../proc/proc_edit_pesawat.php';
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
                        <h1 class="page-header">Pesawat</h1>
                    </div>
                </div>
            </div>
        </div>
		
	<div class="content mt-2">

           <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Edit</strong>
                        </div>
                        <div class="card-body">
						<form name="form1" method="post" action="../proc/proc_edit_pesawat.php">
                            <table class="table" border="0">
								<tr>
									<th>Nama Maskapai</th>
									<th><input type="text" name="nama_m" value="<?php echo $nama_m;?>"></th>
								</tr>
								<tr>
									<th>Foto</th>
									<th><input type="text" name="foto" value="<?php echo $foto;?>"></th>
								</tr>
								<tr>
									<th>Harga Pesawat</th>
									<th><input type="text" name="harga_p" value="<?php echo $harga_p;?>"></th>
								</tr>
								<tr>
									<th><input type="hidden" name="id_pesawat" value=<?php echo $_GET['id_pesawat'];?>></th>
									<th><input type="submit" name="update" value="Update"></th>
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