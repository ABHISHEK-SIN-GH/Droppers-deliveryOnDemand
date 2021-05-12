<?php
session_start();
$insert = false;
if(isset($_POST['name'])){

    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con)
    {
        die("conection failed due to".mysqli_connect_error());
    }
    // echo "successfully connected to database";

    $name = $_POST['name'];
    $_SESSION['name1'] = $name;
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $_SESSION['name2'] = $phone;
    $address = $_POST['address'];
    $password = $_POST['password'];


    $sql = "INSERT INTO `contactus`.`details` (`name`, `email`, `phone`, `address`, `password`, `time`) 
    VALUES ('$name', '$email', '$phone', '$address', '$password', current_timestamp());";
    // echo $sql;

    if($con->query($sql) == true)
    {
        $insert = true;
        echo '<script type="text/javascript">';
        echo ' alert("Now Please Login")';  //not showing an alert box.
        echo '</script>';
        header('location:otp.php');
    }
    else
    {
        echo "ERROR $sql <br> $con->error"; 
    }

    $con->close();
  
}
?>