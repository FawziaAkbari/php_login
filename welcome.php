</<?php 
    session_start();

    if(!isset($_SESSION['usernInfo'])) {
        header("location:index.php?try=again");
    }
?>

<html>
    <link rel="stylesheet" href="style.css">
    <body>
        <div class="article">
            <h2 class="welcome-msg">Welcome To Our Website dear <span class="information"><?php echo $_SESSION['usernInfo']['name']?> </span></h2>
            <h4>Your name is: <span class="information"><?php echo $_SESSION['usernInfo']['name']?> </span></h4>
            <h4>Your age: <span class="information"><?php echo $_SESSION['usernInfo']['age']?> </span></h4>
            <h4>Youe email: <span class="information"><?php echo $_SESSION['usernInfo']['email']?> </span></h4>
            <h4>Your password: <span class="information"><?php echo $_SESSION['usernInfo']['password']?> </span></h4>
            <div id="img">
                    <img src="images/<?php echo $_SESSION['usernInfo']['photo'];  ?>" alt=""  class="image-user">
            </div>
            
            <?php
                	if( isset( $_POST['submit'] )){
                        $directory = 'images/'. $_SESSION['usernInfo']['photo'];
                        $exists = file_exists($directory);
                        
                        if($exists){
                            unlink($directory);
                        
                        }else{
                      
                            echo "The photo was deleted";
                        }
                    }
            ?>
           
              
          
            <!-- button delete -->
            <div>
                <form action="" method="POST">
                        <button id="btn-delete" class="btn-delete" type="submit" name="submit">Delete Photo</button>
                </form>
                <!-- link -->
                <div class="btn">
                    <a href="session.php" >Log me out</a>
                </div>

            </div>
        </div>
    </body>
</html>

