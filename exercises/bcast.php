<?php

	$username="root";
	$password="pneumatic81*";
	$database="se";

	$se = mysqli_connect(localhost,$username,$password,$database);

	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}

	$query01 = "SELECT address FROM subscribers";
	$results01 = mysqli_query($se,$query01);
	$name = "Blah";
	$desc = "Do this\nThen Do More of This.";


	while ($sub = mysqli_fetch_array($results01,MYSQLI_ASSOC)) {

		$output = shell_exec("./mailer.sh " . $sub['address']);
		print_r("Output: " . $output . "<br>");

	}

	mysqli_close($se);

?>
