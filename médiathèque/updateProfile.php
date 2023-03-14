<?php 
session_start();
if (isset($_SESSION['Occupation']) && isset($_SESSION['Nickname'])) {  
?>
<?php 
  if (isset($_SESSION['update'])) {
    $Nickname = $_SESSION['Nickname'];
    $Full_name = $_SESSION['Full_name'];
    $Address = $_SESSION['Address'];
    $Email = $_SESSION['Email'];
    $Phone = $_SESSION['Phone'];
    $CIN = $_SESSION['CIN'];
    $Occupation = $_SESSION['Occupation'];

    $sql = "UPDATE users SET  Full_name='$Full_name', Address='$Address', Email='$Email', Phone='$Phone', CIN='$CIN', Occupation='$Occupation' WHERE Nickname='$Nickname'";
  }}
//     if (mysqli_query($conn, $sql)) {
//         echo "Record updated successfully";
     else {
        echo "Error updating record: " . mysqli_error($conn);
    }

// }
//  else {
//     header("Location: index.php");
//     exit();
// }

