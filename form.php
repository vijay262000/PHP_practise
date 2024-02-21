<!doctype html>
<html lang="Eng" dir="">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

    <title>contact us</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Vijay</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<?php

if($_SERVER ['REQUEST_METHOD'] == `POST`){
    $name =$_POST['name'];
    $Email =$_POST['Email'];
    $description =$_POST['desc'];
    
}
  $servername ="localhost";
  $username ="root";
  $password ="";
  $database ="contact";


  $conn = mysqli_connect($servername, $username, $password, $database);
  $sql ="INSERT INTO `contactus` (`name`, `email`, `consern`)VALUES ('$name', '$Email', '$description')";
if(!$conn)
{
    die("we failed to connect database" . mysqli_connect_error());

}
else
{
    
}



$result = mysqli_query ($conn, $sql);

//check for the database creation success
if($result)
{
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your entry has been successfully submitted!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
else
{
    echo "the data was not inserted successfully------>". mysqli_error($conn);

}


?>  
<div class="contenair mt-3">
  <h2>contact us for your concern<h2>
  <form action= "/php/form.php" method="post">
   <div class="m-3">
     <label for="name" class="form-label">Name</label>
     <input type="name" name="name" class="form-control" id="name" >
     <div id="name" class="form-text"></div>
   </div>
   <div class="m-3">
     <label for="exampleInputEmail1" class="form-label">Email address</label>
     <input type="email" name="Email" class="form-control" id="exampleInputEmail1" >
     <div id="emailHelp" class="form-text"></div>
   </div>
   <div class="mb-3">
     <label for="descreption" class="form-label">descreption</label>
     <input type="descreption" name="desc" class="form-control" id="desc">
     
   </div>
   <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    -->
  </body>
</html>