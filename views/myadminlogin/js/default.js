$(document).ready(function(){
  // alert();
  $("#login-username").focusout(function(){
    var username=$('#login-username').val();
      $.post("myadminlogin/username",
      {username:username},
      function(data)
      {
        var myresponse=(data.found_status);
        if (username=="") {
          $('#login-username').val("");
          setTimeout(function(){
            document.getElementById("usernamefeedback").innerHTML = "Username Cannot be Empty";
               // $("#emptyusernameerr").css("display","block" ).delay(9000).fadeOut('1000');
              },);
        }
        else if(myresponse=="No")
        {
           $('#login-username').val("");
           setTimeout(function(){
             document.getElementById("usernamefeedback").innerHTML = "User Does not Exist";

                // $("#login-usernameerr").css("display","block" ).delay(9000).fadeOut('1000');
               },);
        }else {
          document.getElementById("usernamefeedback").innerHTML = "";

        }
  },'json');

  });
  $("#login").click(function()
  {
    var username=$('#login-username').val();
    var password=$('#login-password').val();
      $.post("myadminlogin/login",
      {username:username, password:password},
      function(data)
      {
        var myresponse=(data.found_status);
        if (username=="") {
          setTimeout(function(){
               // $("#emptypasserr").css("display","block" ).delay(9000).fadeOut('1000');
               document.getElementById("usernamefeedback").innerHTML = "Username Cannot be Empty";

              },);
        }
        else if (password=="") {
          setTimeout(function(){
               // $("#emptypasserr").css("display","block" ).delay(9000).fadeOut('1000');
               document.getElementById("passwordfeedback").innerHTML = "Password Cannot be Empty";

              },);
        }
        else if(myresponse=="Yes")
        {
          window.location.href = "myadmindashboard";
        }else {
          $('#login-password').val("");
          setTimeout(function(){
            document.getElementById("passwordfeedback").innerHTML = "Password Incorrect";

          }, );
        }
      },'json');
    });

});
