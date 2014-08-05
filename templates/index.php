/*<!--SECTION:__"title"__-->*/
/*<!--SECTION:__"top"__-->*/
  {$STRINGS['Site of rightous joy!']}
/*<!--SECTION:__"mid"__-->*/    
    {$STRINGS['Hello, my friend!']}
    <div id = 'mna'> </div>

    <script>
    var authentification_error_message = '{$STRINGS['Autentification error']}'
 /*   var login = function() {
      console.log('hey!');
      var http = new XMLHttpRequest();
      var URL = document.URL;
      http.open('POST', URL.substring(0, URL.lastIndexOf('/')) + '/system/system_login.php', true);
      http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      var params = ['name=' , \$(\"input[name=\'name\']\").val() , '&password=', \$(\"input[name='password']\").val()].join(\"\"); // probably use document.getElementById(...).value
      http.send([params]);
 //     document.write(params);
      http.onload = function() {
  //    alert(http.responseText);
       // \$(\"#mid\").html(http.responseText);
      console.log(http.responseText);
     //  console.log(http.responseText == \"FALSE\");
        if(http.responseText == \"FALSE\"){
            \$(\"#mid\").append('{$STRINGS['Autentification error']}');
        }
        else{
          window.location.href = \"login.php\";
        }
      }
}
*/
//var t2 = setInterval(function(){document.write(Date());}, 1000);

  var x = document.getElementById('mna');
      if(x != null){
        var t2 = setInterval(function(){document.getElementById('mna').innerText = Date();}, 1000);
      }
  //x.innerText = Date();

</script>
      <form method = 'get' action = {$LINKS['log_in_action']}  >
        <p> {$STRINGS['login']} <input type = 'text' name = 'name'></p>
        <p> {$STRINGS['password']} <input type = 'password' name = 'password'></p>
        <p><input type='submit' value = {$STRINGS['submit_login_form']} ></p>
      </form>
        <p></p>
        <p></p>
        
        <button onclick='javascript:createNewUser();' ><h3>Registration?</h3></button>
<?
//  echo \"it works\";
 // echo \$currentPageId;
 //setcookie(\"user\");
// var_dump(\$_COOKIE);
?>
/*<!--SECTION:__"bottom"__-->*/