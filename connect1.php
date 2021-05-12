<?php
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
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $subject = $_POST['subject'];
    $txt = $_POST['txt'];

    $sql = "INSERT INTO `contactus`.`querydata` (`name`, `email`, `phone`, `address`, `subject`, `description`, `time`) 
    VALUES ('$name', '$email', '$phone', '$address', '$subject', '$txt', current_timestamp());";
    // echo $sql;

    if($con->query($sql) == true)
    {
        $insert = true;
        echo '<script type="text/javascript">';
        echo ' alert("Your form is submitted successfully")';  //not showing an alert box.
        echo '</script>';
    }
    else
    {
        echo "ERROR $sql <br> $con->error"; 
    }

    $con->close();
  
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
    <title>Contact Us</title>
</head>

<body>
    <div>
        <div class="navbar">
            <div id="logo"></div>
            <div id="nav">
                <a  href="./index.html">Home</a>
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
                <a class="active" href="./contactUs.html">Contact Us</a>
                <a style="color: rgb(236, 161, 95)" id="ps" href="#">Droppers App<br />
                    <p>Coming Soon On</p>
                    <i class="fab fa-google-play" style="font-size: 38px"></i>
                </a>
            </div>
        </div>
        <div id="toggle" style="position: absolute"></div>
        <div id="navbar">
            <div class="nav">
                <li><a href="./home.html">Home</a></li>
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

        <div id="c-f">
            <div class="cu">
                <div>
                    <h1>-:Contact Us:-</h1><br>
                    <h2 id="ema">Email:- <a href="droppers.service@gmail.com">droppers.service@gmail.com</a></h2><br>
                    <h2>Phone:- <a href="+91-7000610175">+91-7000610175</a></h2><br>
                    <h2>Instagram:- <a href="https://www.instagram.com/droppers.service/">droppers.service</a></h2><br>
                    <h2>Facebook:- <a href="https://www.facebook.com/droppers.service/">Droppers</a></h2><br><br>
                </div>
                <div class="cu-in">
                    <h1>-:Address:-</h1><br>
                    <h3>Plot-47, Street-5, Dixit Colony,<br> Bhilai, Chhattisgarh 490020, India</h3><br><br>

                    <h1>-:Business Hours:-</h1><br>
                    <h3>Monday-Sunday: 9:00am - 10:30pm</h3>
                </div>
            </div>

            <div class="c-form">
                <div class="form">
                    <form action="connect1.php" method="POST">
                        <input type="text" name="name" id="name" placeholder="Full name" required/>
                        <input type="email" name="email" id="email" placeholder="Email" required/>
                        <input type="tel" name="phone" id="phone" placeholder="Phone" required/>
                        <input type="text" name="address" id="Address" placeholder="Address" required/>
                        <input style="width: 31.6vw" type="text" name="subject" id="subject"
                            placeholder="Subject" /><br required/>
                        <textarea name="txt" id="txt" rows="10" style="outline: none"
                            placeholder="Type your message here"></textarea>
                        <br /><br />
                        <button class="btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="details">
            <div>
                <p>
                    2021 © Droppers Ltd.
                </p>
                <br />
                <p>All rights reserved.</p>
            </div><br>
            <div>
                <h1>Contact</h1>
                <br>
                <p href="mailto:droppers.service@gmail.com">droppers.service@gmail.com</p>
                <br>
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
</body>

</html>