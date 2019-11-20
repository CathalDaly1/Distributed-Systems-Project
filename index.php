<!doctype html>
<html lang="en">
    <style>
        .header {
          padding: 30px;
          text-align: center;
          background: #000FFF;
          color: white;
          font-size: 20px;
        }
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
    <head>
        <meta charset="UTF-8">
        <title>Welcome to Tic Tac Toe!</title>
        <link rel="stylesheet" type="text/css" href="PHPStartScreen/Styling.css" />
    </head>
    <body>
        <div class="header">
          <h1>Welcome To Tic Tac Toe! </h1>
          <p>Login and Signup here!</p>
        </div>
        <form method="post" action="" name="signin-form">
            <button onclick="location.href='login.php'" type="button" class="button button1"><b>Login</b></button>
            <br></br>
            <button onclick="location.href='register.php'" type="button" class="button button1"><b>Register</b></button>
        </form>

    </body>
</html>