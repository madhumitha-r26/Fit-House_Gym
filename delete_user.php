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


$id = $_GET['email'];

$sql = "DELETE FROM users WHERE email = '$id'";
$result = mysqli_query($conn, $sql);
 

if (mysqli_query($conn, $sql)) {
    echo '<script>' .
      'alert("User record is deleted");' .
      'window.location.href="admin.php";' .
      '</script>';
} 
else {
    echo '<script>' .
    'alert("User record is not deleted");' .
    'window.location.href="admin.php";'  .
    '</script>'. mysqli_error($conn);
}

mysqli_close($conn);
?>