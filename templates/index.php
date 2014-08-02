/*<!--SECTION:__"title"__-->*/
/*<!--SECTION:__"top"__-->*/
  {$STRINGS['Site of rightous joy!']}
/*<!--SECTION:__"mid"__-->*/    
	  {$STRINGS['Hello, my friend!']}
		<div id = 'mna'> </div>
		<script>


//var t2 = setInterval(function(){document.write(Date());}, 1000);

  var x = document.getElementById('mna');

  var t2 = setInterval(function(){document.getElementById('mna').innerText = Date();}, 1000);
  //x.innerText = Date();

</script>
			<form method = 'get' action = {$LINKS['log_in_action']}  >
  			<p> {$STRINGS['login']} <input type = 'text' name = 'name'></p>
  			<p> {$STRINGS['password']} <input type = 'password' name = 'password'></p>
  			<p><input type='submit' value = {$STRINGS['submit_login_form']} ></p>
<?
//  echo \"it works\";
 // echo \$currentPageId;
?>
/*<!--SECTION:__"bottom"__-->*/