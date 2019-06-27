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
                        <h1>Home</h1>
                    </div>
                </div>
            </div>
        </div>
		
		<div class="content mt-2">

           <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header">
                            <strong>Jumlah Data</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">
                                <tr>
								  <th scope="col">Booking</th>
								  <th scope="col">Hotel</th>
                                  <th scope="col">Kereta</th>
                                  <th scope="col">Laju</th>
                                  <th scope="col">Login</th>
								  <th scope="col">Pemesanan</th>
								  <th scope="col">Penerbangan</th>
								  <th scope="col">Pesawat</th>
								  <th scope="col">Seat Class</th>
								  <th scope="col">Tujuan</th>
                                </tr>
                              </thead>
                              <tbody>
								<?php
								$sql = "select * from kereta";
								$sql2 = "SELECT * FROM laju";
								$sql3 = "SELECT * FROM login";
								$sql4 = "SELECT * FROM pemesanan";
								$sql5 = "SELECT * FROM penerbangan";
								$sql6 = "SELECT * FROM pesawat";
								$sql7 = "SELECT * FROM seat_class";
								$sql8 = "SELECT * FROM tujuan";
								$sql9 = "SELECT * FROM booking";
								$sql0 = "SELECT * FROM hotel";
								
								$result = $conn->query($sql);
								$result2 = $conn->query($sql2);
								$result3 = $conn->query($sql3);
								$result4 = $conn->query($sql4);
								$result5 = $conn->query($sql5);
								$result6 = $conn->query($sql6);
								$result7 = $conn->query($sql7);
								$result8 = $conn->query($sql8);
								$result9 = $conn->query($sql9);
								$result0 = $conn->query($sql0);
								

								$row = $result-> num_rows;
								$row2 = $result2-> num_rows;
								$row3 = $result3-> num_rows;
								$row4 = $result4-> num_rows;
								$row5 = $result5-> num_rows;
								$row6 = $result6-> num_rows;
								$row7 = $result7-> num_rows;
								$row8 = $result8-> num_rows;
								$row9 = $result9-> num_rows;
								$row0 = $result0-> num_rows;
										
										echo "<tr><th scope='row'>". $row9 ."</th><th>". $row0 ."</th><th>". $row ."</th><th>". $row2 ."</th><th>". $row3 ."</th><th>". $row4 ."</th><th>". $row5 ."</th><th>". $row6 ."</th><th>". $row7 ."</th><th>". $row8 ."</th></tr>";
									echo "</table>";
								
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