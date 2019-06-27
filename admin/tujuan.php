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
                        <h1 class="page-header">Tujuan</h1>
                    </div>
                </div>
            </div>
        </div>
		
		<div class="content mt-2">

           <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title float-right"><a href="add_tujuan.php"><button type="button" class="btn btn-primary">Add</button></a></strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">No Tujuan</th>
                                  <th scope="col">Tempat Awal</th>
								  <th scope="col">Tempat Tujuan</th>
                                  <th scope="col">Harga Kereta</th>
								  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
								<?php
								$sql = "select * from tujuan";
								$result = $conn->query($sql);
								
								if($result-> num_rows > 0) {
									while ($row = $result-> fetch_assoc()) {
										echo "<tr><th scope='row'>". $row["no_tujuan"] ."</th><th>". $row["tempat_awal"] ."</th><th>". $row["tempat_tujuan"] ."</th><th>". $row["harga_t"] ."</th><th><a href='edit_tujuan.php?no_tujuan=$row[no_tujuan]'>Edit</a> | <a href='../proc/proc_delete_tujuan.php?no_tujuan=$row[no_tujuan]'onClick=\"return confirm('Are you sure you want to delete?')\")>Delete</a></th></tr>";
									}
									echo "</table>";
								}else {
									echo "<tr><th scope='row'>-</th><th>-</th><th>-</th><th>-</th><th>-</th><th>-</th><th>-</th><th>-</th><th>-</th></tr>";
								}
								$conn-> close();
								?>
                                
                              </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- ISI BAGIAN INI -->
				
				
			
        </div> <!-- .content -->
				
				
			
        </div> <!-- .content -->

     </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>