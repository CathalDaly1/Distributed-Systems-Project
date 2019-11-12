<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sign Up Page</title>
        <link rel="stylesheet" type="text/css" href="Styling.css" />
    </head>
    <body>
         <h2>Register</h2>
        <form method="post" action="" name="signin-form">
            <div clas="form-element">
                <label>Username</label>
                <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
            </div>
             <div class="form-element">
                <label>Email</label>
                <input type="email" name="EmailAddress" required />
            </div>
            <div class="form-element">
                <label>Password</label>
                <input type="password" name="password" required />
            </div>
            <div class="form-element">
                <label>Confirm Password</label>
                <input type="password" name="ConfirmPassword" required />
            </div>
            <button type="submit" name="signup" value="signup">Sign Up</button>
        </form>
         <p>Already have an account <a href='login.php'>Login Here</a></p>
    </body>
</html>
