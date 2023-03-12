<?php 
session_start();

if (isset($_SESSION['Occupation']) && isset($_SESSION['Nickname'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['Full_Name']; ?></h1>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}

// session_start();
include 'connect.php'; // Call file connected with database
// include 'login.php'; // Call the file that adds the data to the database
$sql = "SELECT * FROM `item`  NATURAL JOIN `category`  ";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light "navbar navbar-light style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#">Tanger Médiathèque</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="profilePage.php"> 
          <?php echo $_SESSION['Full_Name']; ?><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  </div>
</nav>
<!-- <div class="container" > -->
<?php
      while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      // $id = $row['ad_id'];
    ?>
    <!-- <div class="row mx-md-n5 mt-5"> -->
<div class="card mb-3 col ml-3 " style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="image/<?php echo $row['Cover_Image'];?>" class="card-img" style="height: 370px; width: 200px;" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"> <?php echo $row['Title']; ?></h5>
        <p class="card-text"> Author Name: <small class="text-muted"> <?php echo $row['Author_Name']; ?></small></p>
        <p class="card-text"> State: <small class="text-muted"> <?php echo $row['State']; ?></small></p>
        <p class="card-text"> Edition Date: <small class="text-muted"> <?php echo $row['Edition_Date']; ?></small></p>
        <p class="card-text"> Category <small class="text-muted"> <?php echo $row['Category_Name']; ?></small></p>
        <p class="card-text">  <?php echo $row['Category_Type']; ?> <small class="text-muted">Category </small></p>

        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3 p-3 mb-2 bg-danger text-white " style="width: 200px; margin-left :40%;">reserve</button>
	      </div>
      </div>
    </div>
  </div>
</div>

<?php
      };
      $pdo = null;
    ?>
</div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</html>