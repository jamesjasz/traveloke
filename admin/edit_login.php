<?php
include '../proc/conn.php';	
include '../proc/proc_edit_login.php';
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
                        <h1 class="page-header">Login</h1>
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
						<form name="form1" method="post" action="../proc/proc_edit_login.php">
                            <table class="table" border="0">
								<tr>
									<th>Username</th>
									<th><input type="text" name="username" value="<?php echo $username;?>"></th>
								</tr>
								<tr>
									<th>Password</th>
									<th><input type="text" name="password" value="<?php echo $password;?>"></th>
								</tr>
								<tr>
									<th>Nama</th>
									<th><input type="text" name="nama" value="<?php echo $nama;?>"></th>
								</tr>
								<tr>
									<th>Email</th>
									<th><input type="text" name="email" value="<?php echo $email;?>"></th>
								</tr>
								<tr>
									<th>Alamat</th>
									<th><input type="text" name="alamat" value="<?php echo $alamat?>"></th>
								</tr>
								<tr>
									<th>Jenis Kelamin</th>
									<th>
										<select name="jk">
											<option value="pria">Pria</option>
											<option value="wanita">Wanita</option>
										</select>
									</th>
								</tr>
								<tr>
									<th>Role</th>
									<th>
										<select name="role">
											<option value="user">User</option>
											<option value="admin">Admin</option>
										</select>
									</th>
								</tr>
								<tr>
									<th><input type="hidden" name="no_iden" value=<?php echo $_GET['no_iden'];?>></th>
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