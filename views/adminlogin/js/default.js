$(document).ready(function(){
    //  alert();
    $("#username").focusout(function(){
        // alert();
      var username=$('#username').val();
        $.post("adminlogin/username",
        {username:username},
        function(data)
        {
          var myresponse=(data.found_status);
          if (username=="") {
            $('#username').val("");
            setTimeout(function(){
              document.getElementById("usernamefeedback").innerHTML = "Username Cannot be Empty";
                 // $("#emptyusernameerr").css("display","block" ).delay(9000).fadeOut('1000');
                },);
          }
          else if(myresponse=="No")
          {
             $('#username').val("");
             setTimeout(function(){
               document.getElementById("usernamefeedback").innerHTML = "User Does not Exist";
  
                  // $("#usernameerr").css("display","block" ).delay(9000).fadeOut('1000');
                 },);
          }else {
            document.getElementById("usernamefeedback").innerHTML = "";
  
          }
    },'json');
  
    });
    $("#login").click(function()
    {
      var username=$('#username').val();
      var password=$('#password').val();
        $.post("adminlogin/login",
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
            window.location.href = "admindashboard";
          }else {
            $('#password').val("");
            setTimeout(function(){
              document.getElementById("passwordfeedback").innerHTML = "Password Incorrect";
  
            }, );
          }
        },'json');
      });
  
  });
  