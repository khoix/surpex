<div class="poison-card">
		<?php

			$username="root";
			$password="Pneumatic81&";
			$database="se";

			$se = mysqli_connect(localhost,$username,$password,$database);

			if (mysqli_connect_errno()) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				exit();
			}

			$query01 = "SELECT * FROM exercises ORDER BY name";
			$result01 = mysqli_query($se,$query01);
			$count=mysqli_num_rows($result01);
			$id = mt_rand(0,($count-1));
			$query02 = "SELECT * FROM exercises WHERE id = $id";
			$result02 = mysqli_query($se,$query02);

			$exercise = mysqli_fetch_array($result02,MYSQLI_ASSOC);

			echo "<div id='card-face'>";
			printf ("<div id='poison_name' style=\"font-family: 'Digital7 Mono' !important;\">%s</div>", $exercise["name"]);
			echo "<center><hr id='bar'></center>";
			printf ("<div id='poison_desc' style=\"font-family: 'Digital7 Mono' !important;\">%s</div>", str_replace(",","<br>",$exercise["description"]));
			printf ("<div id='poison_time' style=\"font-family: 'Digital7 Mono' !important;\">(Duration: %s minutes)</div>", $exercise["time"]);
			echo "</div>";

			mysqli_close($se);
		?>
</div>