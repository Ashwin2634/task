<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);
    if(!$con){
        die("connection to the databace is failed due to" . mysqli_connect_error());
    }
    //echo "success connecting to db";
    
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `ieee`.`registration` ( `fullname`, `email`, `message`) 
    VALUES ( '$fullname', '$email', ' $message ');";

    if($con->query($sql) == true){
        echo "your request is been sent";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
    
?>