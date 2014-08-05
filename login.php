<?php
	header('Cache-Control: no-cache, no-store, must-revalidate'); 
	header('Pragma: no-cache'); 
	header('Expires: 0'); 
?>

<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="-1" />
<!--meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" /-->
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="refresh" content="600"/>
<!DOCTYPE html>

<html>	
	<?	
		include("header.php");
		$currentPageId = "login";
		$currentLanguage = get_language();
		$source = generate_page_data($currentPageId, $currentLanguage);
		
	?>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
		<link type="text/css" rel="stylesheet" href="reset.css"/>
		<script src="jquery.js"></script> 
		<script src="scripts.js"></script> 
		<title>
			<?
				eval ($source['title']);	
			?>
		</title>
	</head>
	<body onunload="">

		<div id = "top">
			<?
				eval($source['top']);	
			?>
		</div>

		<div id = "mid">
			<?
				eval($source['mid']);	
			?>
		</div>

		<div id = "bottom">
			<?
				eval($source['bottom']);	
			?>
		</div>


	</body>

</html>
