<?php
session_start();
$servername = "sql12.freesqldatabase.com";
$username ="sql12714196";
$password = "WtY2YeQHhm";
$dbname ="sql12714196";


$conn = mysqli_connect($servername,$username,$password,$dbname);

$name = $_SESSION["name"];
$email = $_SESSION["email"];
if(isset($_POST['submit'])){
    $ytlink=$_POST['ytlink'];
    $videolink=$_POST['videolink'];
    $email=$_POST['email'];
    $data="INSERT INTO client_data(email,ytlink,videolink)
              VALUES('$email','$ytlink','$videolink')";
     mysqli_query($conn,$data);
    $_SESSION["name"]=$name;
    $_SESSION["email"]=$email;
     header("Location:dashboard.php");
     exit;
    }
    
    else{
        echo "error".mysqli_error($conn);
    }
    
    $conn->close();
    
    ?>
    
