

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
            <?php
            if(isset($_GET["try"])) {
                echo "<h3 style='margin-left:20px'>Please register yourself first!</h3> ";
                }
            ?>
            <form action="login.php" method="POST" enctype="multipart/form-data">
                <div class="input-feild">
                    <label for="name">Name</label>
                    <input class="info" type="text" name="name" id="name" placeholder="Your Name" required>
                </div>
                <div class="input-feild">
                    <label for="age">Age</label>
                    <input class="info" type="text" name="age" id="age" placeholder="Age" required>
                </div>
                <div class="input-feild">
                    <label for="email">Email</label>
                    <input class="info" type="email" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="input-feild">
                    <label for="password">Password</label>
                    <input class="info" type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="input-feild file">
                    <label for="photo">Photo</label>
                    <input class="info" type="file" name="photo" id="photo" placeholder="Photo" required>
                </div>
                <div class="btn-info input-feild">
                    <button class="info button" name="submit">Submit</button>
                    <button class="info button">Reset</button>
                </div>
            </form>
        </div>
</body>
</html>