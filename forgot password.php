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

$email=$_POST['emailid'];
$password1 = $_POST['pwd1'];
$password2 = $_POST['pwd2'];


if($password1==$password2){
    $sql="UPDATE users SET pwd='$password2' WHERE email='$email'";
    $result=mysqli_query($conn,$sql);

 if(!$result)
 {
    if($conn->errno== 1062){
        echo '<script> alert ("Account does not exist.");
        window.location.href="index.html";
        </script>';
    }
    else{
        echo '<script>alert("Error updating password.");
        window.location.href="index.html";
        </script>';
    }
   
 }
 else {
    echo '<script>alert("Password Changed Successfully.");
    window.location.href="index.html";
    </script>';
}

}

else
{
    echo '<script>alert("Password does not match");
    window.location.href="index.html";
    </script>'; 
}


mysqli_close($conn);

?>