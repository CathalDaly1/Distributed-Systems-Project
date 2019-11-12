<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
        <link rel="stylesheet" type="text/css" href="Styling.css" />
    </head>
    <body>
         <h2>Login</h2>
        <form method="post" action="" name="signin-form">
            <div clas="form-element">
                <label>Username</label>
                <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
            </div>
            <div class="form-element">
                <label>Password</label>
                <input type="password" name="password" required />
            </div>
            <button type="submit" name="Login" value="Login">Login</button>
        </form>
         <p>Don't have an account <a href='register.php'>Register Here</a></p>
    </body>
</html>
