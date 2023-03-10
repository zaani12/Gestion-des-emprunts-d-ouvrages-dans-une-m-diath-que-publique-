<?php
// session_start();
// include 'connect.php'; // Call file connected with database
// // include 'login.php'; // Call the file that adds the data to the database
// $sql = "SELECT * FROM `members`  NATURAL JOIN `category`  ";
// $result = $conn->query($sql);

session_start(); 
// include "connect.php";
$conn = new mysqli('localhost', 'root', '', 'tanger_médiathèque');

if (!$conn) {
    die(mysqli_error($conn));
}

if (isset($_POST['Username']) && isset($_POST['Password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['Username']);
	$pass = validate($_POST['Password']);
    echo $uname;
    // echo $uname;

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM members WHERE Nickname='$uname' AND Password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			echo '<pre>'; print_r($row); echo '</pre>';

            if ($row['Nickname'] === $uname && $row['Password'] === $pass) {
            	$_SESSION['Nickname'] = $row['Nickname'];
            	$_SESSION['Full_Name'] = $row['Full_Name'];
            	$_SESSION['Occupation'] = $row['Occupation'];
            	$_SESSION['Admin'] = $row['Admin'];
				if($_SESSION['Admin'] != 1){
                header("Location: home.php");
		        exit();
            }else{
             	header("Location: admin.php");
		        exit();
			}
            }
            else{
				header("Location: index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}
?>

