<!--<div class="popup">
	<div id="poison-popup">-->
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
			$count=mysqli_num_rows($result01);

			$query02 = "SELECT Monday,Tuesday,Wednesday,Thursday,Friday,Saturday FROM queue";
			$result02 = mysqli_query($se,$query02);
			$queue = array_values(mysqli_fetch_array($result02,MYSQLI_ASSOC));

			$id = mt_rand(0,($count-1)); 

			while ( in_array($id,$queue) ) { $id = mt_rand(0,($count-1)); }

			$query03 = "SELECT * FROM exercises WHERE id = $id";
			$result03 = mysqli_query($se,$query03);

			$exercise = mysqli_fetch_array($result03,MYSQLI_ASSOC);

			$update01 = "UPDATE queue SET current=" . $id;
			mysqli_query($se,$update01);

			echo "<div class='popup-face'>";
			printf ("<div id='poison_name' style=\"font-family: 'Digital7 Mono' !important;\">%s</div>", trim($exercise["name"]));
			echo "<center><hr id='bar'></center>";
			printf ("<div id='poison_desc' style=\"font-family: 'Digital7 Mono' !important;\">%s</div>", trim(str_replace("/","<br>",$exercise["description"])));
			printf ("<div id='poison_time' style=\"font-family: 'Digital7 Mono' !important;\">(Duration: %s minutes)</div>", $exercise["time"]);
			echo "</div>";

			printf ("<script> queueWorkout(%s); </script>", $id);

		?>
<!--		<div id="queue-btn-container">
			<button id="queue-btn" onclick="queueWorkout(<?php //echo $id; ?>)">
				<?php //$day = date("l");	echo "Submit " . $day . " Workout"; ?>
			</button>
		</div>
-->
		<?php mysqli_close($se); ?>
<!--	</div>
</div>-->
