<?

//	var_dump($_POST);
//	if($_POST['name'] == '' || $_POST['password'] == ''){ 
//		echo "FALSE";
//		return;
//	}
	//var_dump($_POST);
	//return;
//	echo var_dump($_POST['newpassword'] == '');
	$con=mysqli_connect($_SERVER['SERVER_NAME'],'pavel', '', 'supersite2');
//	echo "UPDATE login SET password='${_POST['newpassword']}' WHERE name = '${_COOKIE['user']}';";
	//$res = mysqli_query($con,"SELECT * FROM login WHERE name = ". "'" . $_COOKIE['user']."'");

$res = mysqli_query($con,"UPDATE login SET password='${_POST['newpassword']}' WHERE name = '${_COOKIE['user']}';");

		//echo \"SELECT * FROM login WHERE name = \". \"'\" . \$_POST['name'].\"'\";
//$res = mysqli_query($con,"SELECT * FROM login WHERE name = ". "'" . $_COOKIE['user']."'");
		//echo \"SELECT * FROM login WHERE name = \". \"'\" . \$_POST['name'].\"'\";
//	$row = mysqli_fetch_assoc($res);
//	var_dump($res);
//	mysql_affected_rows($con);
//	$row = mysqli_fetch_assoc($res);
//	var_dump($row);

//		echo "TRUE";

	
?>
