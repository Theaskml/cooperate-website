<?php
session_start();
$servername = "sql105.infinityfree.com";
$username ="if0_36710490";
$password = "Saugat980";
$dbname ="if0_36710490_Client_details";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn ==false){
    echo "connection failed";

}

$email=$_POST['email2'];
$password = $_POST['password2'];
if($email === "" || $password ===""){
    header("Location:signup.html");
    echo "error";

}
$info = "SELECT * FROM client_record WHERE email='$email' AND password ='$password'";
$result=mysqli_query($conn,$info);
if($result->num_rows > 0){
    while($row = mysqli_fetch_array($result)){
    $name = $row['name'];
   
     $_SESSION["name"]=$name;
    $_SESSION["email"]=$email;
    header("Location:dashboard.php");
    }
}
else{
    
    header("Location:signup.html");
}

?>
