<?php
session_start();


// Contact with the database 
$conn = new mysqli('localhost', 'root', '', 'tanger_médiathèque');

if (!$conn) {
    die(mysqli_error($conn));
}

?>
<?php 
if (isset($_POST['signup'])) {
    $Nickname = $_POST["Nickname"];
    $Full_name = $_POST["Full_name"];
    $Address = $_POST["Address"];
    $Email = $_POST["Email"];
    $phone = $_POST["phone"];
    $CIN = $_POST["CIN"];
    $occupation = $_POST["occupation"];
    $Birth_Date = $_POST["Birth_Date"];
    $Password = $_POST["Password"];
	
    // $password_hash = password_hash($_POST["Password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO members (Nickname, Full_name , Password , Address,  Email, Phone, CIN, Occupation, Birth_Date)
    VALUES ('$Nickname', '$Full_name', '$Password', '$Address', '$Email', '$phone', '$CIN', '$occupation', '$Birth_Date')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      echo "<script> swal('Success', 'Your account is created', 'success'); </script>";
      header("location: loginPage.php");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
      echo "<script> swal('Error', 'Your account is not created', 'warning'); </script>";

    }
}

?>