/*<!--SECTION:__"title"__-->*/
${STRINGS['Registration']}
/*<!--SECTION:__"top"__-->*/
<h1> ${STRINGS['Creating a new account']} <h1>
/*<!--SECTION:__"mid"__-->*/    
<script type='text/javascript'>
	var not_all_fields_filled_message = '${STRINGS['Not all fields filled!']}';
	passwords_dont_match_message = \"${STRINGS['passwords don\'t match!']}\";
</script>
  <form method = 'POST' action = 'javascript:registerNewUser();'  >
  		<p> ${STRINGS['Login']} <input type = 'text' name = 'login' value='<? echo \$_GET['login']?>'> </p>
  		<p> ${STRINGS['Email']}<input type = 'password' name = 'email'></p>
       <p> ${STRINGS['Password']} <input type = 'password' name = 'password' > </p>
       <p> ${STRINGS['Repeat it']}<input type = 'text' name = 'passwordAgain'></p>
       
       <p><input type='submit' value = '{$STRINGS['Create!']}' ></p>
    </form>

/*<!--SECTION:__"bottom"__-->*/

