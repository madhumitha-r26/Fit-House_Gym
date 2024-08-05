<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fit House - User</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/x-icon" href="imgs/logo.png">

<style>

body{
  background-image: url("imgs/bgimage.jpg");
  background-attachment: fixed;
  background-size: cover;
  color: #f2f2f2;
}

span{
  text-transform: capitalize;
}

h2{
  margin-left: 10px;
  font-style: italic;
  font-weight: 300;
}

h3{
  text-align: center;
  font-style: italic;
  font-weight: 500;
}

table {
  margin: 0 auto; 
  border-collapse: collapse; 
}

th, td {
  border: 3px solid black; 
  padding: 10px; 
  text-align: center; 
  font-size: larger;
}

th{
  background-color: #222;
  color: #f2f2f2;
}

.pro{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
}

tr:nth-child(even) {
  background-color: #f4f4f4;
  color: #333;
}

tr:nth-child(odd) {
  color: #f4f4f4;
  background-color: #333;
}

</style>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top" data-bs-spy="scroll" data-bs-target="#navId">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.html">
                <img src="imgs/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                FIT HOUSE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" style="border: none;"
              data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span id="navbar-hamburger">
                  <i class="fa fa-bars" style="color: white;"></i>
                </span>
                <span id="navbar-close" style="display: none;">
                  <i class="fa fa-close" style="color: white;" ></i>
                </span>
              </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav nav-pills ms-auto" style="justify-content:end;">
                  <li class="nav-item">
                    <a class="nav-link active" href="index.html">Logout</a>
                  </li>
                  </ul>
              </div>
            </div>
          </nav>
    </header>
<br>

<div class="main" data-bs-spy="scroll" data-bs-target="#simple-list-example"
data-bs-offset="0" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">


<?php

$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_name="fithouse";


$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn) { 
    echo "Connection failed: ".mysqli_connect_error(); 
    exit;
}


$email = mysqli_real_escape_string($conn, $_POST['emailid']);
$password = mysqli_real_escape_string($conn, $_POST['pwd']);

$sql = "SELECT * FROM users WHERE email = '$email' AND pwd = '$password'";
$result = mysqli_query($conn, $sql);


if($email =="admin@gmail.com" and $password=="admin123"){
  echo"<script>
  window.location.href='admin.php';
  </script>";
}



    if (mysqli_num_rows($result) == 0) {
      echo '<script>' .
      'alert("Invalid Login Details");' .
      'window.location.href="index.html";' .
      '</script>';
      exit;
  }

    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }

    $user = mysqli_fetch_assoc($result);
    ?>

<div class="pro">
<h2>
Welcome <span> 
  <?php 
      if (mysqli_num_rows($result) == 1) 
      {
        echo $user["username"]; 
      }
  ?> 
</span> </h2>

<h3>
  <b>Batch:</b>
 <span> 
  <?php 
      if (mysqli_num_rows($result) == 1) 
      {
        echo $user["sess"]; 
      }
  ?> 
</span> 
</h3>

</div>

<br>

<?php

if($user["sess"]=="Morning"){?>
  <h3><b>Schedule for Morning Batch</b></h3>
  <table>
  <tr>
    <th>Monday</th>
    <th>Tuesday</th>
    <th>Wednesday</th>
    <th>Thursday</th>
    <th>Friday</th>
    <th>Saturday</th>
    <th>Sunday</th>
  </tr>
  <tr>
    <td>(5.30 AM - 6.00 AM) <br> <b>Squats</b> </td>
    <td> </td>
    <td> (6.10 AM - 6.45 AM) <br><b> Aerobics and Zumba</b></td>
    <td> </td>
    <td> (6.55 AM - 7.10 AM) <br><b>Stretching</b> </td>
    <td> </td>
    <td>(7.20 AM - 7.30 AM) <br> <b>Boxing</b> </td>
  </tr>
  <tr>
    <td> </td>
    <td>(6.10 AM - 6.30 AM) <br> <b>Treadmill </b></td>
    <td> </td>
    <td> (6.40 AM - 7.00 AM) <br><b>Stretching</b>  </td>
    <td> </td>
    <td> (7.10 AM - 7.30 AM) <br><b>Boxing</b> </td>
    <td> </td>
  </tr>
  <tr>
  <td>(6.00 AM - 6.15 AM) <br><b>Gymnastics</b> </td>
    <td> </td>
    <td> (6.25 AM - 6.40 AM) <br> <b>Weight Lifting</b></td>
    <td> </td>
    <td> (6.45 AM - 7.00 AM) <br><b>Yoga</b> </td>
    <td> </td>
    <td>(7.15 AM - 7.30 AM) <br><b> Pull-Ups and Push-ups</b> </td>
  </tr>
</table>


<?php
}
if($user["sess"]=="Evening"){?>
<h3><b>Schedule for Evening Batch</b></h3>
<table>
  <tr>
    <th>Monday</th>
    <th>Tuesday</th>
    <th>Wednesday</th>
    <th>Thursday</th>
    <th>Friday</th>
    <th>Saturday</th>
    <th>Sunday</th>
  </tr>
  <tr>
    <td>(5.30 PM - 6.00 PM) <br> <b>Squats</b> </td>
    <td> </td>
    <td> (6.10 PM - 6.45 PM) <br> <b>Aerobics and Zumba</b> </td>
    <td> </td>
    <td> (6.55 PM - 7.10 PM) <br> <b> Stretching</b></td>
    <td> </td>
    <td>(7.20 PM - 7.30 PM) <br> <b>Boxing </b>  </td>
  </tr>
  <tr>
    <td> </td>
    <td>(6.10 PM - 6.30 PM) <br> <b> Treadmill</b> </td>
    <td> </td>
    <td> (6.40 PM - 7.00 PM) <br> <b>Stretching</b>  </td>
    <td> </td>
    <td> (7.10 PM - 7.30 PM) <br> <b> Boxing</b></td>
    <td> </td>
  </tr>
  <tr>
  <td>(6.00 PM - 6.15 PM) <br> <b>Gymnastics</b></td>
    <td> </td>
    <td> (6.25 PM - 6.40 PM) <br> <b>Weight Lifting</b></td>
    <td> </td>
    <td> (6.45 PM - 7.00 PM) <br> <b>Yoga</b></td>
    <td> </td>
    <td>(7.15 PM - 7.30 PM) <br> <b>Pull-Ups and Push-ups </b></td>
  </tr>
</table>
<?php } ?>

</div>

<br>

</body>
</html>