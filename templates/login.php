/*<!--SECTION:__"title"__-->*/
${STRINGS["Welcome!"]}
/*<!--SECTION:__"top"__-->*/



${STRINGS["You've successfully logged in!"]}
<h1>${STRINGS["Be ready to suffering!"]} </h1> 
/*<!--SECTION:__"mid"__-->*/    

<script type='text/javascript'>

</script>
<?
	if(!array_key_exists('user', \$_COOKIE)){
		echo 	'<h1>Impostor!</h1>';
		return;
	} 
	echo getdate()['minutes'],':',getdate()['seconds'];
	//var_dump(\$_COOKIE);
	
		
?>	
<script type='text/javascript'>
	passwords_dont_match_message = \"${STRINGS['passwords don\'t match!']}\";
	password_changed_successfully_message = \"${STRINGS['Password changed successfully!']}\";
</script>
<button onclick = 'javascript:logout();'> ${STRINGS['logout']}</button>

  <form method = 'POST' action = 'javascript:changePassword();'  >
        <p> ${STRINGS['New password']} <input type = 'password' name = 'password' > </p>
        <p> ${STRINGS['Repeat it']}<input type = 'password' name = 'passwordAgain'></p>

        <p><input type='submit' value = {$STRINGS['Change password']} ></p>
        </form>
/*<!--SECTION:__"bottom"__-->*/

