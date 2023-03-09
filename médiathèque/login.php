<?php
// session_start();


// Contact with the database 
// $conn = new mysqli('localhost', 'root', '', 'tanger_médiathèque');

// if (!$conn) {
//     die(mysqli_error($conn));
// }

?>
<?php
// if(isset($_POST['login'])){
// 	$Username = htmlspecialchars(trim(strtolower($_POST['login'])));
// 	$Password = $_POST['Password'];
// 	$query = "SELECT * FROM members WHERE '$Username' =Nickname AND  '$Password'  = Password  ";
// 	if(mysqli_num_rows(mysqli_query($conn,$query))==1){
// 		$_SESSION['Username'];
// 		header("location: index.php");
// 	}else{
// 		echo"password incorect?§!";
// 	}
// }

?>
<?php

// session_start();


// // Contact with the database 
// $conn = new mysqli('localhost', 'root', '', 'tanger_médiathèque');

// if (!$conn) {
//     die(mysqli_error($conn));
// }



// $valueEmail = "";
// $Emailexists = "";
// $Passwexists = "";


// if(isset($_POST['login'])){
    
//     $Username = $_POST["Username"];
//     $passw = md5($_POST["password"]);

//     $selectEmail = "SELECT * FROM `Members` WHERE `Nickname` = '$Username'";
//     $resultEmail = $db->query($selectEmail);

//     $selectPassw = "SELECT * FROM `Members` WHERE `Nickname` = '$Username' AND `Password` = '$passw' ";
//     $resultPassw = $db->query($selectPassw);

    
//     if ($resultEmail->rowCount() > 0){
//         if($resultPassw->rowCount() > 0){
            
//             $selectAdmin = "SELECT * FROM `Members` WHERE `Nickname` = '$Username' AND `Admin` = 1";
//             $resultAdmin = $db->query($selectAdmin);
//             if($resultPassw->rowCount() > 0){
//                 $_SESSION['Username'] = $Username;
//                 header("Location:index.php");
//             }else {
//                 $_SESSION['Username'] = $Username;
//                 header("Location:login.php");
//             }

//         }else {
//             $Passwexists = "This password does not exist";
//             $valueUsername = " $_POST[Username]";
//         }

//     }else {
//         $Emailexists ="This email does not exist";
// 	}
// }
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

	
	<link rel="stylesheet" href="style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(./image/bg2.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form method="POST" action="index.php" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Username" name="Username" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password" name="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3" id="loginbtn" name="login">login</button>
	            </div>
				<div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign up</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
	</body>
</html>

