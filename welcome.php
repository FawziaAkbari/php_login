</<?php 
    session_start();
?>

<html>
    <link rel="stylesheet" href="style.css">
    <body>
    <?php

        if(!isset($_SESSION['usernInfo'])) {
            header("location:index.php?try=again");
        }
  
    ?>  
        <div class="article">
            <h2 class="welcome-msg">Welcome To Our Website dear <span class="information"><?php echo $_SESSION['usernInfo']['name']?> </span></h2>
            <h4>Your name is: <span class="information"><?php echo $_SESSION['usernInfo']['name']?> </span></h4>
            <h4>Your age: <span class="information"><?php echo $_SESSION['usernInfo']['age']?> </span></h4>
            <h4>Youe email: <span class="information"><?php echo $_SESSION['usernInfo']['email']?> </span></h4>
            <h4>Your password: <span class="information"><?php echo $_SESSION['usernInfo']['password']?> </span></h4>
            <img src="images/<?php echo $_SESSION['usernInfo']['photo']?> ?>" alt="your profile" class="image-user">
            <div class="btn">
                <a href="session.php" >Log me out</a>
            </div>
        </div>
    </body>
</html>

