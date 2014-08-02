<!DOCTYPE html>

<html>	
	<?	
		include("header.php");

		$currentPageId = "index";
		if(array_key_exists('language', $_COOKIE)){
			$currentLanguage = $_COOKIE['language'];
		}
		else{
			//$currentLanguage = "english";
			$currentLanguage = "russian";
		}

		//$sourceFile = fopen($currentLanguage . '_' . $currentPageId . '_' . 'data.php', "rb");
		//$source = unserialize(file_get_contents($currentLanguage . '_' . $currentPageId . '_' . 'data.php'));
		$source = generate_page_data($currentPageId, $currentLanguage);
		
	?>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
		<link type="text/css" rel="stylesheet" href="reset.css"/>
		<script src="jquery.js"></script> 
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
