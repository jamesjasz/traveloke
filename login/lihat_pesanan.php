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
    <link rel="stylesheet" href="../css/bootstrap.css" />
	<link rel="stylesheet" href="../css/style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
						</nav>

                    </div>
					
						
                </div>
				
				
            </div>
        </div>
    </header>
	
<div class="container">
		 <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Pesanan Anda</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No. Pesanan</th>
                        <th>No. Penerbangan</th>
                        <th>No. Laju</th>
						<th>No. Booking</th>
                        <th>Jumlah Penumpang</th>
						<th>No. Class</th>
						<th>Tgl Pemesanan</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
					$wew = $_SESSION['login_id'];
					$query = "SELECT * FROM pemesanan WHERE no_iden='$wew' order by no_pemesanan ASC";	
					$result = mysqli_query($conn, $query);
						if($result-> num_rows > 0) {
							while ($row = $result-> fetch_assoc()) {
						echo "<tr><th>". $row['no_pemesanan'] ."</th><th>". $row['no_penerbangan'] ."</th><th>". $row['no_laju'] ."</th><th>". $row['no_booking'] ."</th><th>". $row['jumlah_penumpang'] ."</th><th>". $row['no_class'] ."</th><th>". $row['tgl_pemesanan'] ."</th></tr>";
							}
						echo "</table>";
						}
					?>
</div>


<footer class="jumbotron-footer">
<div >
</div>
</footer>
 <!-- Menyisipkan JQuery dan Javascript Bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
	
	
</body>
</html>