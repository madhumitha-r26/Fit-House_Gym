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


$username=$_POST['username'];
$email=$_POST['emailid'];
$session=$_POST['session'];
$gender = $_POST['gender'];
$phone=$_POST['phone'];
$password = $_POST['pwd'];



$sql="INSERT INTO users (email,phone,username,pwd,sess,gender) VALUES ('$email','$phone','$username','$password','$session','$gender')";
$result=mysqli_query($conn,$sql);

if(!$result)
 {
    if($conn->errno== 1062){
        echo '<script> alert ("Account already exists");
        window.location.href="index.html";
        </script>';
    }
    else{
        echo '<script> alert ("Registration failed.");
        window.location.href="index.html";
        </script>';
    
    }
   
 }
else
{
    echo '<script>alert("Registration Successful");
    window.location.href="index.html";
    </script>'; 
}


mysqli_close($conn);

?>