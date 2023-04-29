<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
		<link rel="shortcut icon" href="../assets/images/surprise-exercise-121x127.png" type="image/x-icon">
		<meta name="description" content="">

		<title>Surprise Exercise</title>
		<link rel="stylesheet" href="../assets/tether/tether.min.css">
		<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css">
		<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-reboot.min.css">
		<link rel="stylesheet" href="../assets/dropdown/css/style.css">
		<link rel="stylesheet" href="../assets/socicon/css/styles.css">
		<link rel="stylesheet" href="../assets/theme/css/style.css">
		<link rel="preload" as="style" href="../assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="../assets/mobirise/css/mbr-additional.css" type="text/css">
		<link rel="apple-touch-icon" href="../imgs/apple_icon.png">


		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.21/af-2.3.5/datatables.min.css"/>
		<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.21/af-2.3.5/datatables.min.js"></script>
		<script>
			$(document).ready( function () {
			    $('#table_id').DataTable();
			} );
		</script>
	</head>

	<body>

		<section class="menu cid-s48OLK6784" once="menu" id="menu1-h">
		    
		    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
		        <div class="container">
		            <div class="navbar-brand">
		                <span class="navbar-logo">
		                    <a href="http://se.khoix.net:8080">
		                        <img src="../assets/images/surprise-exercise-121x127.png" alt="Surprise Exercise" style="height: 3.8rem;">
		                    </a>
		                </span>
		                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="http://se.khoix.net:8080">Surprise Exercise</a></span>
		            </div>
		            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		                <div class="hamburger">
		                    <span></span>
		                    <span></span>
		                    <span></span>
		                    <span></span>
		                </div>
		            </button>
		        </div>
		    </nav>

		</section>

		<section class="header1 cid-s48MCQYojq mbr-fullscreen mbr-parallax-background" id="header1-f">
			<div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(255, 255, 255);"></div>
			<div class="align-center container">
      		  <div class="row justify-content-center">
           		 <div class="col-12 col-lg-8">
           		 	<div style="background-color: white; border-radius: 25px; padding: 25px; box-shadow: 5px 5px 5px grey;">
						<table id="table_id" class="display">
						    <thead>
						        <tr>
						            <th>Name</th>
						            <th>Description</th>
						            <th>Duration</th>
						        </tr>
						    </thead>
						    <tbody>
								<?php
									$username="root";
									$password="pneumatic81*";
									$database="se";

									$se = mysqli_connect("mysql_service",$username,$password,$database);

									if (mysqli_connect_errno()) {
										echo "Failed to connect to MySQL: " . mysqli_connect_error();
										exit();
									}

									$query01 = "SELECT * FROM exercises ORDER BY name";
									$result01 = mysqli_query($se,$query01);

									while($exercise = mysqli_fetch_array($result01,MYSQLI_ASSOC)) {
										printf ("<tr><td>%s</td><td>%s</td><td>%s</td></tr>\n", $exercise["name"], $exercise["description"],$exercise["time"]);
									}

									mysqli_close($se);

								?>
						    </tbody>
						</table>
					</div>
					<br><br><br><br><br><br><br><br>
				</div>
			</div>
		</section>
	</body>
</html>