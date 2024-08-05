<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
    .frame{
        margin: 50px;
        padding: 50px;
        width:300px;
        border: 3px solid white;
        align-items: center;
        justify-content: center;
    }
   </style>
</head>
<body>
<div class="frame">

<?php

$sql1= "SELECT COUNT(*) as morning_session FROM users WHERE sess='Morning'";
$result1=mysqli_query($conn,$sql1);
if(!$result1)
{
    echo "Error:" .mysqli_error($conn);
    exit;
}

$row1=mysqli_fetch_assoc($result1);
echo "<p><b>Morning Session:</b>" ."  " .$row1['morning_session']. "</p>";

//----------------------------------

$sql2= "SELECT COUNT(*) as evening_session FROM users WHERE sess='Evening'";
$result2=mysqli_query($conn,$sql2);
if(!$result2)
{
    echo "Error:" .mysqli_error($conn);
    exit;
}

$row2=mysqli_fetch_assoc($result2);

echo "<p><b>Evening Session:</b>" ."  " .$row2['evening_session']. "</p>";
?> 
</div>
</body>
</html>
