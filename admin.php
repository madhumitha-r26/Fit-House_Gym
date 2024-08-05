<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fit House - Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
  text-align: center;
  font-weight: 300;
}

button{
  color: #f4f4f4;
  outline: none;
  border: none;
  font-size: medium;
  padding: 5px;
  margin:5px;
  width:50px;
  border-radius: 50%;
}

table {
  margin: 0 auto; 
  border-collapse: collapse; 
}

h2,p{
  color: aliceblue;
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

td  {
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
  
<div class="head">

<h2>WELCOME ADMIN</h2>
<p id="demo"></p>

</div>


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



$sql="SELECT * FROM users";
$result=mysqli_query($conn,$sql);


echo " <table border='2' style='border: 2px solid black; border-collapse: collapse;'>
    <tr>
    <th>Name</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Batch</th>
    <th>Phone</th>
    <th>Actions</th>
    </tr>";
    
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['sess'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        
        echo "
        <td>   
        <button style='background-color:green' onclick=\"editRow('" . $row['email'] . "')\"> 
       <i class='bi bi-pencil-fill'></i></button>
      
        <button style='background-color:red' onclick=\"deleteRow('" . $row['email'] . "')\">
        <i class='bi bi-trash3-fill'></i></button>
       </td>";
       echo "</tr>";
    }

    echo"</table>";
    echo"</center>";
?>

<?php
include "count.php";
?>





</div>

<br>

<script>
const d = new Date();
document.getElementById("demo").innerHTML = d;

  function deleteRow(id) 
  {
        if (confirm("Are you sure you want to delete this user details?")) {
          window.location.href = "delete_user.php?email=" + id;
        }
  }

    function editRow(id) 
    {
        if (confirm("Are you sure you want to edit user details?")) {
            window.location.href = "edit_user.php?email=" + id;
        }
    }

</script>

</body>
</html>