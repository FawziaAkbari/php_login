<?php

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
        <div class="container">
            <h1 class="title">Let's get you set up</h1>
            <form action="login.php" method="$_GET
            ">
                <div class="input-feild">
                    <label for="name">Name</label>
                    <input class="info" type="text" name="name" id="name" placeholder="Your Name">
                </div>
                <div class="input-feild">
                    <label for="lastName">Last Name</label>
                    <input class="info" type="text" name="lastName" id="lastName" placeholder="Last Name">
                </div>
                <div class="input-feild">
                    <label for="email">Email</label>
                    <input class="info" type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="input-feild">
                    <label for="password">Password</label>
                    <input class="info" type="password" name="password" id="password" placeholder="Password">
                </div>
                <div class="input-feild file">
                    <label for="photo">Photo</label>
                    <input class="info" type="file" name="photo" id="photo" placeholder="Photo">
                </div>
                <div class="button input-feild">
                    <input type="submit"class="info" value="Login">
                    <input type="reset"class="info" value="Reset">
                </div>
            </form>
        </div>
</body>
</html>