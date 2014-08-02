/*<!--SECTION:__"title"__-->*/
${STRINGS["Welcome!"]}
/*<!--SECTION:__"top"__-->*/

${STRINGS["You've successfully logged in!"]}
<h1>${STRINGS["Be ready to suffering!"]} </h1> 
/*<!--SECTION:__"mid"__-->*/    
		<h1>${STRINGS["Alas, no actions available "]} </h1>
		<?php

	if(\$_GET['name'] == '' || \$_GET['password'] == ''){ 
		echo \"${STRINGS['Empty!']} \";
	 }

	\$con=mysqli_connect('127.0.0.1','pavel', '', 'supersite2');

	\$res = mysqli_query(\$con,\"SELECT * FROM login WHERE name = \". \"'\" . \$_GET['name'].\"'\");
		//echo \"SELECT * FROM login WHERE name = \". \"'\" . \$_GET['name'].\"'\";
	\$row = mysqli_fetch_assoc(\$res);

	if(\$_GET[\"name\"] == \$row[\"name\"] && \$_GET[\"password\"] == \$row[\"password\"]){

		echo \"<b style='font-size: 40px; color: green'> Hello, my lord! Привет, Господин! óả</b>\";
		setcookie(\"name\", \$_GET[\"name\"]);
	}
	else { ?><script>
		window.location.href = \"index.php\";
		alert(\"${STRINGS['No match for pair login & password!']}\");
		</script>
		echo \" ${STRINGS['not authorized!']}\";

	<?}
	
?>

/*<!--SECTION:__"bottom"__-->*/

Blalba