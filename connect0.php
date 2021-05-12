<?php

session_start();

$con = mysqli_connect('localhost','root','','contactus');

mysqli_select_db($con,'contactus');

$email = $_POST['email'];
$password = $_POST['password'];

$q = " select * from details where email='$email' && password='$password' ";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num==1){
$_SESSION['username']=$email;
header('location:./login/home.html');
}
else{
    $message = "You have entered wrong Email Id or Password";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Droppers Food Delivery Website in Bhilai-Durg, Chhattishgarh">
    <meta name="keywords"
        content="Droppers, Food-Delivery, Delivery, Delivery in Bhilai-Durg, Food, zomato, swigy, parcel, cake delivery, grocery delivery">
    <meta name="author" content="Abhishek Kumar Singh">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Dancing+Script&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat&family=Dancing+Script&family=New+Tegomin&family=Source+Code+Pro&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous" />
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="./log.css">
    <title>Home</title>
</head>

<body>
    <div>
        <div class="navbar">
            <div id="logo"></div>
            <div id="nav">
                <a class="active" href="#">Home</a>
                <div class="dropdown">
                    <a class="dropbtn" class="active">Services</a>
                    <div class="dropdown-content">
                        <a href="./so.html">Service Offered</a>
                        <a href="./pp.html">Privacy Policy</a>
                        <a href="./cr.html">Cancellation/Refund</a>
                        <a href="./t&c.html">T & C</a>
                    </div>
                </div>
                <a href="./aboutUs.html">About Us</a>
                <a href="./contactUs.html">Contact Us</a>
                <a style="color: rgb(236, 161, 95)" id="ps" href="#">Droppers App<br />
                    <p>Coming Soon On</p>
                    <i class="fab fa-google-play" style="font-size: 38px"></i>
                </a>
            </div>
        </div>
        <div id="toggle" style="position: absolute"></div>
        <div id="navbar">
            <div class="nav">
                <li><a href=".#">Home</a></li>
                <li><a href="./so.html">Service Offered</a></li>
                <li><a href="./pp.html">Privacy Policy</a></li>
                <li><a href="./cr.html">Cancellation/Refund</a></li>
                <li><a href="./t&c.html">T & C</a></li>
                <li><a href="./aboutUs.html">About Us</a></li>
                <li><a href="./contactUs.html">Contact Us</a></li>
            </div>
        </div>
        <script>
            const toggle = document.getElementById("toggle");
            const navbar = document.getElementById("navbar");
            toggle.onclick = function () {
                toggle.classList.toggle("active");
                navbar.classList.toggle("active");
            };
        </script>

        <div id="main">
            <div id="con-main">
                <h4>
                    DROPPERS <br /><br /><i>We provide the On-demand Delivery service in the region of
                        <br />Bhilai-Durg.</i><br /><br />
                    <button id="gq" onclick="myfunc()">
                        <h3>
                            <a href="#">Get Quote</a>
                        </h3>
                    </button>
                </h4>
            </div>
            <a style="color: rgb(236, 161, 95); text-decoration: none;" id="bg-p" href="#">
                <h2>Droppers App Coming Soon On</h2>
                <i class="fab fa-google-play" style="font-size: 38px"> Playstore</i>
            </a>
            <div id="bg-main"></div>
        </div>

        <div class="footer">
            <div class="details">
                <div>
                    <p>2021 © Droppers Ltd.</p>
                    <br />
                    <p>All rights reserved.</p>
                </div>
                <div class="cc">
                    <h1>Contact</h1>
                    <br />
                    <p href="mailto:droppers.service@gmail.com">
                        droppers.service@gmail.com
                    </p>
                    <br />
                    <p>7000610175</p>
                </div>
            </div>
            <hr style="color: white; width: 90%; margin: auto" />
            <br /><br />
            <div class="social">
                <ul>
                    <li>
                        <a href="https://www.instagram.com/droppers.service/" target="_blank"><i
                                class="fab fa-instagram" style="font-size: 38px"></i></a>
                    </li>
                    <li>
                        <i class="fab fa-twitter" style="font-size: 38px"></i>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/droppers.service/" target="_blank"><i class="fab fa-facebook"
                                style="font-size: 38px"></i></a>
                    </li>
                    <li>
                        <a href="https://api.whatsapp.com/send?phone=+917000610175&text=Order Now!!!!!"
                            target="_blank"><i class="fab fa-whatsapp" style="font-size: 38px"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div>
        <div class="center">
            <input type="checkbox" id="show">
            <label for="show" class="show-btn">login</label>
            <div class="container">
                <label for="show" class="close-btn fas fa-times" title="close"></label>
                <div class="text">
                    Login</div>
                <form action="./connect0.php" method="POST">
                    <div class="data">
                        <label>Email</label>
                        <input type="text" name="email" required>
                    </div>
                    <div class="data">
                        <label>Password</label>
                        <input type="password" name="password" required>
                    </div>
                    <div class="btn">
                        <div class="inner">
                        </div>
                        <button type="submit">login</button>
                    </div>
                    <div class="signup-link">
                        Not a member? <a id="a1" href="./signup.html">Signup now</a></div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function myfunc() {
            document.getElementById("show").checked = true;

        }
    </script>
</body>

</html>
