<?php

//	var_dump($_POST);
	if($_POST['name'] == '' ){ 
		echo "FALSE";
		return;
	 }
	$con=mysqli_connect($_SERVER['SERVER_NAME'],'pavel', '', 'supersite2');

//	$res = mysqli_query($con,"SELECT * FROM login");
	$res = mysqli_query($con,"SELECT name, password FROM login WHERE name = ". "'" . $_POST['name']."'");
		//echo \"SELECT * FROM login WHERE name = \". \"'\" . \$_POST['name'].\"'\";
	$row = mysqli_fetch_assoc($res);
//	var_dump($row);
	if($_POST["name"] == $row["name"] && $_POST["password"] == $row["password"]){

	//	echo "<b style='font-size: 40px; color: green'> Hello, my lord! Привет, Господин! óả</b>";
	//	setcookie("user", $_POST["name"], 30, $_SERVER['SERVER_NAME'] . "/");
	//	setcookie("user", $_POST["name"], -10, "/", false);
		setcookie('user', $_POST["name"], gmmktime(3, 14, 7, 1, 19, 2038), '/', $_SERVER['SERVER_NAME'], false);
		echo "TRUE";
	//	var_dump($_COOKIE);
		
	}
	else {
		echo "FALSE";
		return;
	}
	
?>