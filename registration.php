<!DOCTYPE html>

<html>	
	<?	
		include("header.php");
		$currentPageId = "registration";
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
				eval($source['title']);	
			?>
		</title>
	</head>
	<body>

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
