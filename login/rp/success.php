<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./verify.php">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Dancing+Script&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Dancing+Script&family=New+Tegomin&family=Source+Code+Pro&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous" />
    <style>
        body {
            font-size: 1.2rem;
            font-family: "New Tegomin", serif;
            height: 100vh;
            width: 100%;
            color: rgb(243, 132, 34);
            background-color: rgb(243, 132, 34, 0.8);
            overflow-x: hidden;
        }

        * {
            margin: 0;
            padding: 0;
            outline: none;
            box-sizing: border-box;
        }

        .row-f {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .col-f {
            display: flex;
            flex-direction: column;
            align-items: left;
            justify-content: center;
        }

        .col-f h3 {
            text-align: center;
            align-items: center;
            justify-content: center;
        }


        .cont {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            width: 100vw;
            height: 100vh;
        }

        .container {
            background-color: #f2f2f2;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 3px;
            width: 50vw;
            margin: auto;
        }

        input[type=text] {
            width: 45vw;
            margin-bottom: 20px;
            padding: 1rem;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        label {
            margin-bottom: 1rem;
            display: block;
        }

        .icon-container {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 1.3rem;
        }

        .btn {
            background-color: rgb(243, 132, 34);
            color: white;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 45vw;
            border-radius: 3px;
            cursor: pointer;

        }

        .btn:hover {
            background-color: rgb(243, 132, 34, 0.8);
        }

        a {
            color: #2196F3;
        }

        hr {
            border: 1px solid lightgrey;
        }

        span.price {
            float: right;
            color: grey;
        }

        .bcl {
            display: inline;
            width: 40px;
            height: 40px;
            position: absolute;
            top: 10px;
            right: 10px;
            color: white;
            font-size: 2rem;
        }


        @media screen and (max-width:412px) {
            .container {
                width: 80vw !important;
                margin: auto;
            }

            input[type=text] {
                width: 75vw !important;
            }

            .btn {
                width: 75vw !important;
            }

        }
    </style>
</head>

<body>

    <div class="cont">
        <br>

        <h2 style="text-align: center; color:white;">Your payment was successful!!!</h2><br>

        <div class="container">
            <form action="pay.php" method="post" style="padding: 25px;">

                <div class="row-f">
                    <div class="col-f">
                        <h3 id="heading" style="font-family:Caveat, cursive; font-size:2.3rem;">Please Fill the Details</h3><br>

                        <a href="../home.html" class="bcl"><i class="fas fa-times"></i></a>
                        <label for="fname"><i class="fa fa-user"></i>Name</label>
                        <input type="text" id="fname" name="customername" placeholder="Enter Full Name">
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="Enter Email Address">
                        <label for="city"><i class="fa fa-mobile"></i> Mobile</label>
                        <input type="text" id="city" name="contactno" placeholder="Enter Mobile Number">
                        <label for="money"><i class="fa fa-money"></i> Amount</label>
                        <input type="text" id="amount" name="price" placeholder="Please Enter Amount">

                    </div>

                    <input style="font-family:Caveat, cursive; font-size:1.2rem; font-weight:bold;" type="submit" name="submit" value="Proceed to Pay" class="btn">
            </form>
        </div>

    </div>

</body>

</html>