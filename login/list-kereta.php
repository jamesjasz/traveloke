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
						
					</div>
						</nav>

                    </div>
					
						
                </div>
				
				
            </div>
        </div>
    </header>
	
<div class="container">
	 <div class="card">
        <div class="card-header">
            <strong class="card-title">List kereta sesuai kriteria</strong>
        </div>
         <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Kereta</th>
                        <th scope="col">Jam</th>
						<th scope="col">Durasi</th>
						<th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
				<?php
					$class = $_SESSION['classs'];
					$penumpang = $_SESSION['jmls'];
					$tgl = $_SESSION['tgl_ker'];
					$asal = $_SESSION['asals'];
					$tujuan = $_SESSION['tujs'];
					
					
					
					$sql = "SELECT * from laju l, kereta k, tujuan t , seat_class s WHERE l.id_kereta=k.id_kereta AND l.no_tujuan=t.no_tujuan AND l.tgl_berangkat='$tgl' AND t.tempat_awal='$asal' AND t.tempat_tujuan='$tujuan' AND s.no_class='$class'";
					$result = $conn->query($sql);
								
					if($result-> num_rows > 0) {
						while ($row = $result-> fetch_assoc()) {
					
						$total = $penumpang * ($row['harga_k'] + $row['harga_s'] + $row['harga_t']);
						
							echo "<tr><th scope='row'>". $row["nama_k"] ."</th><th>". $row["jam"] ."</th><th>". $row["durasi"] ."</th><th>". $total ."</th><th> <a href='../proc/proc_pesan_ker.php?no_laju=$row[no_laju]' onClick=\"return confirm('Apakah anda yakin?')\">Pesan</a></th></tr>";
						}
						echo "</table>";
						}else {
							echo "<tr><th scope='row'>-</th><th>-</th><th>-</th><th>-</th></tr>";
						}
						$conn-> close();
				?>
                                
                </tbody>
            </table>

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