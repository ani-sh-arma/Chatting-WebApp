<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Byte Talk</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <!-- including header -->
    <?php include 'partials/_header.php';?>

    <main>
        <div class="info main-div">
            <h2>Login to start chatting with your friends.</h2><br>
            This is a chatting app that has been created to help people connect with each other no matter where they
            are.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste tenetur voluptatum error exercitationem
            doloribus vero, ipsa, veritatis quis sapiente assumenda corporis quos. Maxime animi facilis fugit est
            voluptatum sequi porro nihil odit, vero ipsum, officiis similique. Excepturi praesentium commodi rerum
            suscipit asperiores? Praesentium maxime omnis, voluptatum totam repellat ipsa dolor!
        </div>
        <div class="login main-div">
            <h1>Login</h1>
            <form action="">
                <label for="login" class="login-username label">Username:</label><br>
                <input type="text" class="login-email input" name="login" placeholder="Username / e-mail"><br>
                <label for="login-password" class="login-password-label label">Password:</label><br>
                <input type="password" name="login-password" id="" class="login-password input" placeholder="Password">
                <input type="submit" value="Submit" class="btn submit"><br>
                <!-- <button id="signup-btn" class="signup-btn" onclick="change()">Click here,</button>to sign-up. -->
                <a href="signup.php">Sign up</a>
            </form>
        </div>
        <div class="signup main-div">

        </div>
    </main>
    <footer>
        Byte Talk chatting app. Created to connect people.
    </footer>

</body>

</html>