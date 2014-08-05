<?
	error_reporting(E_ERROR | E_PARSE);

	function get_language(){ 
		$currentLanguage = "undefined";
		if(array_key_exists('language', $_COOKIE)){
			$currentLanguage = $_COOKIE['language'];
		}
		else{
		$languages  = array();
		if (($list = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']))) {
            	if (preg_match_all('/([a-z]{1,8}(?:-[a-z]{1,8})?)(?:;q=([0-9.]+))?/', $list, $list)) {
	                $language = array_combine($list[1], $list[2]);
	                foreach ($language as $n => $v){
	                	$n = strtok($n, '-');

	                 //   $language[$n] = $v ? $v : 1;
	                	array_push($languages, $n);
	            	}
	             //   arsort($language, SORT_NUMERIC);
	            }
	       //     var_dump($language);

        } else $languages = array();
        	//	var_dump($languages);
				if($language[0] ==  'en'){
					$currentLanguage = "english";
				}

				if($languages[0] == 'ru'){
					$currentLanguage = "russian";
				}
			}
			

		if($currentLanguage == "undefined"){
				$currentLanguage = "english";
		}

		return $currentLanguage;
	
	}
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


		set_error_handler(function(){return true;}, E_ERROR | E_PARSE);
		$STRINGS = array();
		$LINKS = array();
		$result =array();

		$tmp = "";

//	echo $currentLanguage . '_'.$currentPageId . "_substitutions.php";
//	eval(file_get_contents($currentLanguage . '_'.$currentPageId . "_substitutions.php"));
//	$file_contents = "./substitutions/". $currentLanguage . "/" .$currentPageId . ".php");
	eval(file_get_contents("./substitutions/". $currentLanguage . "/" .$currentPageId . ".php"));



//	$arr = get_code_snippets_array($currentPageId . "_template.php");
	$arr = get_code_snippets_array("./templates/".$currentPageId . ".php");
	foreach ($arr as $key => $value) {
		//addcslashes($value, '"');
		//addslashes($value);
		//echo $value;
		//echo "<p>===================================================================================</p>";
		//quotemeta($value);
	//	addcslashes($value, '"');
	//	echo $value;
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