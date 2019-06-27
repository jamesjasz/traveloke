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
                        <h1 class="page-header">Laju</h1>
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
						<?php 
						$querys = "SELECT * FROM kereta";	
						$results = mysqli_query($conn, $querys);
						$querys2 = "SELECT * FROM tujuan";	
						$results2 = mysqli_query($conn, $querys2);
						?>
						<form name="form1" method="post" action="../proc/proc_add_laju.php">
                            <table class="table" border="0">
								<!--<tr>
									<th>No. Laju</th>
									<th><input type="text" name="no_laju"></th>
								</tr>-->
								<tr>
									<th>ID Kereta</th>
									<th>
										<select name="id_kereta" class="form-control">
											<option value selected ></option>
											<?php while($row = mysqli_fetch_array($results)):;?>
											<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
											<?php endwhile;?>
										</select>
									</th>
								</tr>
								<tr>
									<th>Tgl Berangkat</th>
									<th><input type="date" name="tgl_b" class="form-control"
                               placeholder="Date" required></th>
								</tr>
								<tr>
									<th>Jam</th>
									<th><input type="text" name="jam"></th>
								</tr>
								<tr>
									<th>Durasi</th>
									<th><input type="text" name="durasi"></th>
								</tr>
								<tr>
									<th>No. Tujuan</th>
									<th>
										<select name="no_tujuan" class="form-control">
											<option value selected ></option>
											<?php while($row2 = mysqli_fetch_array($results2)):;?>
											<option value="<?php echo $row2[0];?>"><?php echo $row2[0];?></option>
											<?php endwhile;?>
										</select>
									</th>
								</tr>
								<tr>
									<th><input type="hidden" name="no_laju"></th>
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