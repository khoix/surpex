<html>
	<head>
		<?php include 'headers.php' ?>
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/r-2.2.5/datatables.min.js"></script>
		<script src="js/lity.js"></script>
		<script type="text/javascript">
			$(document).ready( function () {
			    $('#catalog').DataTable( {
			    	responsive: true,
					"columnDefs": [
						{"targets": 0,"orderable": false, visible: false},
						{"targets": 1,"orderable": true, responsivePriority: 1},
						{"targets": 2,"orderable": false, responsivePriority: 2}
					],
					"order": [[ 0, 'dsc' ]]
				} );
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
		                        <img src="../../assets/images/surprise-exercise-121x127.png" alt="Surprise Exercise" style="height: 3.8rem;">
		                    </a>
		                </span>
		                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="http://se.khoix.net:8080" style="font-family: Xenotron !important;">Surprise<br>Exercise</a></span>
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
           		 <div style="font-family: Arial !important;">
           		 	<div id="cat-container">
       		 			<table id="catalog" class="display">
						    <thead>
						    	<button id="catalog-submit-btn" class="submit-btn">Submit Entry</button><br><br>
						        <tr>
						        	<th class="hiddenCol">ID</th>
									<th><input type="text" maxlength="35" id="name" name="name" placeholder="Name"></th>
									<th><input type="url" maxlength="100" id="link" name="link" placeholder="Link"></th>
						        </tr>
						    </thead>
						    <tbody>

								<?php
									$username="root";
									$password="pneumatic81*";
									$database="se";

									$se = mysqli_connect(localhost,$username,$password,$database);

									if (mysqli_connect_errno()) {
										echo "Failed to connect to MySQL: " . mysqli_connect_error();
										exit();
									}

									$query01 = "SELECT * FROM catalog ORDER BY id DESC";
									$result01 = mysqli_query($se,$query01);

									while($entry = mysqli_fetch_array($result01,MYSQLI_ASSOC)) {
										printf ("<tr><td class='hiddenCol'>%s</td><td id='cat-name'>%s</td><td id='cat-link'><center><a data-lity target='_blank' href='%s'><img class='cat-icon' src='../../imgs/video.png'></a></center></td></tr>\n", $entry["id"], $entry["name"], $entry["link"], $entry["link"]);
									}

									mysqli_close($se);

								?>
						    </tbody>
						</table>
						<div id="inline" style="background:#fff" class="lity-hide"></div>
					</div>
					<br><br><br><br><br><br><br><br>
				</div>
			</div>
		</section>
		<script>
			var btn = document.getElementById("catalog-submit-btn");

			btn.onclick = function() {

				var name = document.getElementById("name").value;
				var link = document.getElementById("link").value;

				if (( name ) && ( link )) {	

					$.post("../submit.php", { name: name, link: link }, 
					 	function() {
        					$("#catalog").load(location.href + " #catalog");
 						}
 					);
				} else { 
					alert("No input detected!");

				}
			}
		</script>
	</body>
</html>
