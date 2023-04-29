<?php

	$username="root";
	$password="Pneumatic81&";
	$database="se";

	$se = mysqli_connect(localhost,$username,$password,$database);

	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}

	//print "\nName: " . $_POST['name'];
	//print "\nDescription: " . $_POST['desc'];
	//print "\nTime: " . $_POST['time'];

	$query01 = "SELECT * FROM exercises";
	$result01 = mysqli_query($se,$query01);
	$id=mysqli_num_rows($result01);

	$insert01="INSERT INTO exercises VALUES(\"" . $id . "\", \"" . $_POST['name'] . "\", \"" . $_POST['desc'] . "\", \"" . $_POST['time'] . "\")";

	print $insert01;

	mysqli_query($se,$insert01);

	mysqli_close($se);

?>