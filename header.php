<?
	error_reporting(E_ERROR | E_PARSE);
	function wrap_code($str){
		return "?>". $str . "<?";
	}

	function get_code_snippets_array($file){
		$str =  file_get_contents($file);
		$arr = explode('/*<!--SECTION:__"', $str);

		$result = array();

		foreach ($arr as $value) {
		//	echo $value;
			$tmp = explode('"__-->*/', $value);
			//echo var_dump($tmp);
			//echo $tmp[0];
			if(array_key_exists(1, $tmp)){
		//	echo $tmp[0], " ";
				$result[$tmp[0]] = $tmp[1];
			}
			else {
				//echo "Hey! ";
		//		echo $tmp[0];
				$result[$tmp[0]] = "";
			}
		}

		return $result;
	}

	function generate_page_data($currentPageId, $currentLanguage){



		$STRINGS = array();
		$LINKS = array();
		$result =array();

		$tmp = "";

//	echo $currentLanguage . '_'.$currentPageId . "_substitutions.php";
//	eval(file_get_contents($currentLanguage . '_'.$currentPageId . "_substitutions.php"));
	eval(file_get_contents("./substitutions/". $currentLanguage . "/" .$currentPageId . ".php"));



//	$arr = get_code_snippets_array($currentPageId . "_template.php");
	$arr = get_code_snippets_array("./templates/".$currentPageId . ".php");
	foreach ($arr as $key => $value) {
		eval("\$tmp = \"$value\";"); 
		$result[$key] = wrap_code($tmp);
	}
	//$f = fopen($currentLanguage . '_' . $currentPageId . '_' . 'data.php', "w");
	//fwrite($f, serialize($result));
	//fclose($f);
	return $result;

	//echo "<h1> Successfully generated page ".$currentPageId . " on ". $currentLanguage . " language! </h1>";
	}

?>