<?php


?>
<!doctype html>
<html lang="en">
    <style>
        .button {
          background-color: #4CAF50; /* Green */
          border: none;
          color: white;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
        }
        .button1 {
          background-color: white;
          color: black;
          border: 2px solid #000FFF;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#registerSub").click(function() {
            firstname = $("#registerFrm #fname").val();
            surname = $("#registerFrm #sname").val();
            username = $("#registerFrm #uname").val();
            password = $("#registerFrm #pword").val();
            password2 = $("#registerFrm #pword2").val();
            email = $("#registerFrm #pword").val();
            $.ajax({
                method: "POST",
                url: "IRegister.php",
                data: {name: name, surname: surname, username: username, password: password},
                cache: false,
                success: function (result) {
                    if(result < 0) {
                        alert("Apologies. \nThere is some problem connecting to the WebService. \nPlease try again later.");
                    }
                    if(result == 0) {
                        alert("Problem registering those details.\nPlease re-enter your details.");
                    }
                    if(result > 0) {
                        window.location.replace("login.php")
                    }
                    else{
                        alert(result);
                    }
                }
            });
        });
        });
    </script>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up Page</title>
        <link rel="stylesheet" type="text/css" href="Styling.css" />
    </head>
    <body>
         <h2>Register</h2>
         <p>Already have an account <a href='login.php'>Login Here</a></p>
         <table id="registerFrm">
             <tr>
                 <td><label for="fname" autofocus>Name:</label></td>
                 <td><input type="text" id="fname" name="fname" tabindex="1" /><span id="name_err" style="display:none;color:red;font-weight:bold;">This field cannot be blank.</span></td>
             </tr>
             <tr>
                 <td><label for="sname" autofocus>Surname:</label></td>
                 <td><input type="text" id="sname" name="uname" tabindex="2" /><span id="surname_err" style="display:none;color:red;font-weight:bold;">This field cannot be blank.</span></td>
             </tr>
             <tr>
                 <td><label for="uname" autofocus>Username:</label></td>
                 <td><input type="text" id="uname" name="uname" tabindex="3" /><span id="username_err" style="display:none;color:red;font-weight:bold;">This field cannot be blank.</span></td>
             </tr>
             <tr>
                 <td><label for="pword">Password:</label></td>
                 <td><input type="text" id="pword" name="pword" tabindex="4" /><span id="password_err" style="display:none;color:red;font-weight:bold;">This field cannot be blank.</span></td>
             </tr>
             <tr>
                 <td><label for="pword2" autofocus>Confirm password:</label></td>
                 <td><input type="text" id="pword2" name="pword2" tabindex="5" /><span id="password2_err" style="display:none;color:red;font-weight:bold;">This field cannot be blank.</span><span id="notmatching" style="display:none;color:red;font-weight:bold;">Password not confirmed - doesn't match above</span></td>
             </tr>
             <tr>
                 <td><label for="email" autofocus>Email:</label></td>
                 <td><input type="text" id="email" name="email" tabindex="6" /><span id="email_err" style="display:none;color:red;font-weight:bold;">This field cannot be blank.</span></td>
             </tr>
             <tr><td colspan="2"><hr /></td></tr>
             <tr>
                 <td><input type="submit" tabindex="7" id="registerSub" /></td>
                 <td><input type="reset" tabindex="8" /></td>
             </tr>
         </table>
    </body>
</html>
