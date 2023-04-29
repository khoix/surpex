<?php

	$username="root";
	$password="pneumatic81*";
	$database="se";

	$se = mysqli_connect("surpex_db",$username,$password,$database);

	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}

	//print "\nName: " . $_POST['name'];
	//print "\nDescription: " . $_POST['desc'];
	//print "\nTime: " . $_POST['time'];

	if ( isset($_POST['desc']) ) {

		$query01 = "SELECT * FROM exercises";
		$result01 = mysqli_query($se,$query01);
		$id = mysqli_num_rows($result01);

		$name = str_replace("\"","'",$_POST['name']);
		$desc = str_replace("\"","'",$_POST['desc']);

		$insert01 = "INSERT INTO exercises VALUES(\"" . $id . "\", \"" . $name . "\", \"" . $desc . "\", \"" . $_POST['time'] . "\")";
	}

	if ( isset($_POST['link']) ) {

		$query01 = "SELECT * FROM catalog";
		$result01 = mysqli_query($se,$query01);
		$id = mysqli_num_rows($result01);

		$name = str_replace("\"","'",$_POST['name']);
		$link = $_POST['link'];

		$insert01 = "INSERT INTO catalog VALUES(\"" . $id . "\", \"" . $name . "\", \"" . $link . "\")";
	}

	if ( isset($_POST['addr']) ) {

		$address = $_POST['addr'];

		$insert01 = "INSERT INTO subscribers (address) VALUES(\"" . $address . "\")";
	}

	if ( isset($_POST['current']) ) {

		$id = $_POST['current'];
		$day = date("l");

		$insert01 = "UPDATE queue SET " . $day . "=" . $id;

                $query01 = "SELECT address FROM subscribers";
                $results01 = mysqli_query($se,$query01);

                $query02 = "SELECT name,description,time FROM exercises WHERE id=" . $id;
                $results02 = mysqli_query($se,$query02);
                $exercise = mysqli_fetch_array($results02,MYSQLI_ASSOC);

                $ex_name = $exercise['name'];
		$ex_desc = str_replace("/","\\n",$exercise['description']);
		$ex_time = $exercise['time'];

		while ($sub = mysqli_fetch_array($results01,MYSQLI_ASSOC)) {
//		$output = shell_exec("./mailer.sh 2528647949@mms.att.net" . " \"" . $ex_name . "\" \"" . $ex_desc . "\" \"" . $ex_time . "\"");
		$output = shell_exec("./mailer.sh " . $sub['address'] . " \"" . $ex_name . "\" \"" . $ex_desc . "\" \"" . $ex_time . "\"");
                }

	}

	mysqli_query($se,$insert01);

	mysqli_close($se);

?>

