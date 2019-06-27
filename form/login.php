<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travel Agency Database Kalbis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Menyisipkan Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css" />
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
 
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<a class="nav-link" href="../index.html">Home <span class="sr-only">\</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="../aboutus.html">About Us</a>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item navbar-right">
								<a class="nav-link" href="login.php">Login</a>
							</li>
							<li class="nav-item navbar-right">
								<a class="nav-link" href="regis.php">Register</a>
							</li>
						</ul>
					</div>
</nav>

                    </div>
					
						
                </div>
				
				
            </div>
        </div>
    </header>
	
				<div class="jumbotron-isi tengah jumbotron-fluid ">
					<div class ="row">
						<div class="col" style="margin-left: 100px; margin-top: 50px;" >
							<form class="form-horizontal" role="form" method="POST" action="../proc/proc_login.php">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2>Login User</h2>
                <hr>
            </div>
        </div>
		
		<div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Username</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                        <input type="text" name="username" class="form-control" id="name"
                               placeholder="Username" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
		
       
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Password</label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                        <input type="password" name="password" class="form-control" id="password"
                               placeholder="Password" required>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
               <!--- <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <i class="fa fa-close"> Example Error Message</i>
                        </span>
                </div>--->
            </div>
        </div>      
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success" style="margin-left: 43px;"><i class="fa fa-user-plus"></i> Login</button>
            </div>
        </div>
    </form>
						
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