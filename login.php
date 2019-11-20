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
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
        <link rel="stylesheet" type="text/css" href="Styling.css" />
    </head>
    <body>
    <?php include "templates/header.php"; ?>
        <form method="post" action="" name="signin-form">
            <h2>Login</h2>
                <label>Username</label>
                <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />

                <label>Password</label>
                <input type="password" name="password" required />

            <button onclick="location.href='createNewGame.php'" type="button" class="button button1"><b>Login</b></button>
        </form>
         <p>Don't have an account <a href="register.php">Register Here</a></p>
    </body>
</html>
