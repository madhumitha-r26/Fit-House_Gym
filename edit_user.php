<?php
 $db_hostname = "127.0.0.1";
 $db_username = "root";
 $db_password = "";
 $db_name = "fithouse";

 $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
 if(!$conn) { 
     echo "Connection failed: ".mysqli_connect_error(); 
     exit;
 }

 $id = $_GET['email'];

 $sql = "SELECT * FROM users WHERE email='$id'";
 $result = mysqli_query($conn, $sql);
 
 if (mysqli_num_rows($result) > 0) {
     $row = mysqli_fetch_assoc($result);
 } else {
     echo "Error: " . mysqli_error($conn);
 }
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username=$_POST['username'];
  $email=$_POST['email'];
  $session=$_POST['session'];
  $phone=$_POST['phone'];
 
  $sql = "UPDATE users SET username='$username', phone='$phone', sess='$session' 
   WHERE email='$email'";
 
     if (mysqli_query($conn, $sql)) {     
         echo '<script>' .
         'alert("User record is updated");' .
         'window.location.href="admin.php";' .
         '</script>';
         
     } else {
         echo "Error: " . mysqli_error($conn);
     }
 }
 
 mysqli_close($conn);
 ?>


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
        body {
            background-image: url("imgs/bgimage.jpg");
            background-attachment: fixed;
            background-size: cover;
            color: #f2f2f2;
        }

        h2 {
            margin-left: 10px;
            text-align: center;
            font-weight: 300;
        }

        .update {
            background-color: #f4f4f4;
            color: black;
            outline: none;
            border: none;
            font-size: medium;
            padding: 5px;
            margin: 5px;
            width: 100%;
        }

        h2, p {
            color: aliceblue;
        }

        form {
            border: none;
            width: 550px;
        }

        form input, form select {
            width: 100%;
            height: 50px;
            margin: 10px;
        }
    </style>

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top" data-bs-spy="scroll" data-bs-target="#navId">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="imgs/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                    FIT HOUSE
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" style="border: none;" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span id="navbar-hamburger">
                        <i class="fa fa-bars" style="color: white;"></i>
                    </span>
                    <span id="navbar-close" style="display: none;">
                        <i class="fa fa-close" style="color: white;"></i>
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

    <div class="main" data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
        <h2>EDIT USER DETAILS</h2>
        <center>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <input type="hidden" name="email" value="<?php echo $row['email']; ?>">

                            <input type="text" name="username" id="username" value="<?php echo $row['username']; ?>"><br>

                            <input type="number" name="phone" id="phone" value="<?php echo $row['phone']; ?>"><br>

                            <select name="session" id="session">
                                <?php
                                $sessions = array("Morning", "Evening");
                                foreach ($sessions as $sess) {
                                    if ($sess == $row['sess']) {
                                        echo "<option value='" . $sess . "' selected>" . $sess . "</option>";
                                    } else {
                                        echo "<option value='" . $sess . "'>" . $sess . "</option>";
                                    }
                                }
                                ?>
                            </select><br>

                            <button type="submit" class="update">UPDATE USER DETAILS</button>
                        </form>
        </center>
    </div>


</body>
</html>
