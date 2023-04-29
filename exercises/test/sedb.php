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
	printf ("%s: %s\n", $exercise["name"], $exercise["description"]);

#	while($row = mysqli_fetch_array($results,MYSQLI_ASSOC)) {
#		printf ("%s: %s\n", $row["name"], $row["description"]);
#	}

	mysqli_close($se);

?>