 var login = function() {
  //    console.log('hey!');
      var http = new XMLHttpRequest();
      var URL = document.URL;
      http.open('POST', URL.substring(0, URL.lastIndexOf('/')) + '/system/system_login.php', true);
      http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      var params = ['name=' , $("input[name='name']").val() , '&password=', $("input[name='password']").val()].join(""); 
      http.send([params]);
 //     document.write(params);
 console.log($("input[name='password']").val());
      http.onload = function() {
  //    alert(http.responseText);
       // \$(\"#mid\").html(http.responseText);
      console.log(http.responseText);
   //    console.log(http.responseText == \"FALSE\");
///    console.log("TRUE");
  //   console.log(http.responseText != "TRUE");
        if(http.responseText != "TRUE"){
            $("#mid").append(authentification_error_message);
       /*     for(var i = 0; i < 4; ++i){
              if("TRUE"[i] != http.responseText[i]){
                console.log(i);
                console.log("TRUE"[i]);
                console.log(http.responseText[i]);
              }
            }
          */  
        }
        else{
          window.location.href = "login.php";
        }
      }
}

var logout = function (){
  //  document.cookie = \"user=; domain=\$_SERVER['SERVER_NAME']; Expires=Thu, 01 Jan 1970 00:00:01 GMT;\";

      var http = new XMLHttpRequest();
      var URL = document.URL;
      http.open('POST', URL.substring(0, URL.lastIndexOf('/')) + '/system/system_logout.php', true);
      http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    //  var params = ['name=' , \$(\"input[name=\'name\']\").val() , '&password=', \$(\"input[name='password']\").val()].join(\"\"); // probably use document.getElementById(...).value
      http.send();
      http.onload = function() {
     //   console.log(http.responseText);
    //    alert(http.responseText);
      document.cookie = 'user=; domain=127.0.0.1; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
      window.location.href = 'index.php';
      
    }
  }

  var changePassword = function(){
     var http = new XMLHttpRequest();
      var URL = document.URL;
      http.open('POST', URL.substring(0, URL.lastIndexOf('/')) + '/system/system_changePassword.php', true);
     if( $("input[name='password']").val()  != $("input[name='passwordAgain']").val()){
        alert(passwords_dont_match_message);
        return;
     }
     console.log($("input[name='password']").val() == ' ');
     var params = ['newpassword=' , $("input[name='password']").val()].join(""); 

      http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    //  var params = ['name=' , \$(\"input[name=\'name\']\").val() , '&password=', \$(\"input[name='password']\").val()].join(\"\"); // probably use document.getElementById(...).value
      http.send([params]);
      http.onload = function() {
      //  alert("Password changed successfully!" + http.responseText);
      $("#mid").append(http.responseText);
        
    }
  }

  var createNewUser = function(){
    //$.post("registration.php", {login:$("input[name='name']").val()}).done(function(res)   {window.location="registration.php"});
       window.location.href = "registration.php?login=" + $("input[name='name']").val();
  }

  var registerNewUser = function(){
    if( $("input[name='password']").val()  != $("input[name='passwordAgain']").val()) {
        alert(passwords_dont_match_message);
        return;
     }

     if($("input[name='login']").val() == "" || $("input[name='email']").val() == ""){
        alert(not_all_fields_filled_message);
        return;
     }

    
   // $.post("URL.lastIndexOf('/')) + '/system/system_newUser.php", { login: $("input[name='login']").val(), password: $("input[name='password']", $("input[name='email']").val()).val() }).done(function(res)   {window.location="index.html"});
  }

