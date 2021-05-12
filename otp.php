<?php
require 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
<title>Sending OTP</title>
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
body{
	overflow-x: hidden;
	font-family: 'Cinzel', serif;
	margin: 0;
	padding: 0;
	color: linear-gradient(to left, #ED8F03, #FFB75E);
	color: -webkit-linear-gradient(to left, #ED8F03, #FFB75E);
	color: orange;
	font-family: 'Lora', serif;
}
.fo{
	font-family: 'Cinzel', serif;
	border: 8px solid wheat;
	width: 30vw;
	background: #FFB75E;  /* fallback for old browsers */
	background: -webkit-linear-gradient(to left, #ED8F03, #FFB75E);  /* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to left, #ED8F03, #FFB75E); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	padding: 40px;	
	margin: auto!important;
}
div{
text-align: center;
width: 100vw;
margin: 0;
padding: 0;
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
}
button{
	display: flex;
	flex-direction: column;
	justify-content: center;
	text-align: center!important;
	padding: 10px 25px;
	border: 5px solid orange;
	border-radius: 50%;
	font-size: 1.1rem;
	font-family: 'Cinzel', serif;
	font-weight: 700;
}
button:hover{
	opacity: 0.7;
}
label{
	font-size: 1.2rem;
	color: black;
	font-weight: bold;
	font-style: italic;
	font-family: 'Cinzel', serif;
}
input{
	font-family: 'Poppins', sans-serif;
	display: flex;
	width: 25vw;
	justify-content: center;
	align-items:center;
	flex-direction: column;
	margin:6px 0px;
	padding: 4px;
	outline: none;
	border: 3px solid silver;
}
form{
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	width: 100vw;
	margin: 0;
	padding: 0;
	justify-content: center;
}
@media screen and (max-width:560px) {

.fo{
	width: 75vw;
	border: 7px solid wheat;
}
input{
	width: 75vw;
}
}

@media screen and (max-width:412px) {

	.fo{
		width: 60vw;
		border: 5px solid wheat;
	}
	input{
		width: 60vw;
	}
}
</style>
</head>
<body>
<div class="container">
<h1 class="text-center">Please Verify With OTP</h1>
<hr>
	<div class="row">
	<div>

<?php
if(isset($_POST['sendopt'])) {
// Account details
// $apiKey = urlencode('N2M5NDUzNjgzYzU5MTcyZjU1YzAyNTI1NGJlMzY4NDc=');
	
// Message details
$numbers = array($_POST['mobile']);
$sender = urlencode('DROPUS');
$otp = mt_rand(10000, 99999);
echo $otp;
$message = rawurlencode('Hello, Your OTP for login to DROPPERS app is '.$otp.'. Enjoy our services.



Regards
B P Deshmukh BROTHERS');
try {setcookie('otp', $otp);
    echo "OTP successfully send..";
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
$numbers = implode(',', $numbers);
// Prepare data for POST request
$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
$ch = curl_init('https://api.textlocal.in/send/');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
// Process your response here
// echo $response;
}

if(isset($_POST['verifyotp'])) { 
$otp = $_POST['otp'];
if($_COOKIE['otp'] == $otp) {
    echo "Congratulation, Your mobile is verified.";
	header('location:/final/login/home.html');
} else {
    echo "Please enter correct otp.";
}
}
?>


	</div>
    <div class="fo">
        <form role="form" method="post" enctype="multipart/form-data">
            <div class="row">
                <div>
                    <label for="uname">-: Name :-</label>
                    <input type="text" id="uname" name="uname" value="<?php echo $_SESSION['name1'];?>"  placeholder="Enter your name" required="">
                </div>
            </div>
            <div class="row">
                <div>
                    <label for="mobile">-: Mobile :-</label>
                    <input type="text"  id="mobile" name="mobile" value="<?php echo $_SESSION['name2'];?>" maxlength="10" placeholder="Enter valid mobile number" required="">
                </div>
            </div><br>
            <div class="row">
                <div>
                    <button type="submit" name="sendopt">Send OTP</button>
                </div>
            </div>
            </form>
			<br>
			<hr style="height:2px;width:30vw;color:black;">
			<br>
            <form method="POST" action="">
            <div class="row">
                <div>
                    <label for="otp">-: OTP :-</label>
                    <input type="text" id="otp" name="otp" placeholder="Enter OTP" maxlength="5" required="">
                </div>
            </div><br>
             <div class="row">
			 <div>
                    <button type="submit" name="verifyotp">Verify</button>
                </div>
            </div><br>
        </form>
	</div>
</div>
</body>
</html>