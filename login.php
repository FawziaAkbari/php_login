<?php
session_start();

require("index.php");

if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $photo_tmp = $_FILES["photo"]["tmp_name"];
    $photoName = $_FILES["photo"]["name"];
    $photo_type = $_FILES["photo"]["type"];
    $photo_type = $_FILES["photo"]["size"];
    move_uploaded_file($photo_tmp,"images/".$photoName);

    if($photo_type != 'image/jpg' && $photo_type != 'image/png'){
        echo "Only images are allowed";
    } else {
        move_uploaded_file($photo_tmp,"images/".$photoName);
    }

  

    $userInfo = [
        'name' => $name,
        'age' => $age,
        'password' => $password,
        'email' => $email,
        'photo' => $photoName,
        'account-type' => 'admin'
        
    ];

    $_SESSION['usernInfo'] = $userInfo ;
    if( $_SESSION['usernInfo']) {
        header("location:welcome.php");
    }
    else {
        header("location:index.php?try=again");
    }
    
}


    

?>

