<?php 
session_start();

if (isset($_SESSION['Occupation']) && isset($_SESSION['Nickname'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./profil.css">
    <title>profile</title>
</head>
<body>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
            </div>

            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                <form action="updateProfile.php" method="POST" class="profile-form">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Nickname</label><input type="text" class="form-control" placeholder="Nickname" value="<?php echo $_SESSION['Nickname']; ?>"></div>
                        <div class="col-md-6"><label class="labels">Full Name</label><input type="text" class="form-control" value="<?php echo $_SESSION['Full_Name']; ?>" placeholder="Full Name"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Address</label><input type="text" name="Address" class="form-control" placeholder="enter Address" value="<?php echo $_SESSION['Address']; ?>"></div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" name="Email" class="form-control" placeholder="enter Email" value="<?php echo $_SESSION['Email']; ?>"></div>
                        <div class="col-md-12"><label class="labels">phone</label><input type="text" name="phone" class="form-control" placeholder="enter phone" value="<?php echo $_SESSION['Phone']; ?>"></div>
                        <div class="col-md-12"><label class="labels">CIN</label><input type="text" name="CIN" class="form-control" placeholder="CIN" value="<?php echo $_SESSION['CIN']; ?>"></div>
                        <div class="col-md-12"><label class="labels">occupation</label><input type="text"  name="occupation" class="form-control" placeholder="occupation" value="<?php echo $_SESSION['Occupation']; ?>"></div>
                        <!-- <div class="col-md-12"><label class="labels">Birth Date</label><input type="text" class="form-control" placeholder="Birth Date" value="<?php echo $_SESSION['Birth_Date']; ?>"></div> -->
                       
                    </div>
  
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" name="update" type="submit">Save Profile</button></div>
            </form>
            <?php 
}else{
     header("Location: index.php");
     exit();
}
?> 
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
	</body>
</body>
</html>