<?php
session_start();
$servername = "sql105.infinityfree.com";
$username ="if0_36710490";
$password = "Saugat980";
$dbname ="if0_36710490_Client_details";

$conn = mysqli_connect($servername,$username,$password,$dbname);
$email=$_SESSION["email"];
$info = "SELECT * FROM check_result WHERE email = '$email'";
$data = mysqli_query($conn,$info);
if($data->num_rows > 5){
    
    while($row = $data->fetch_assoc()) {
    $result = $row['result'];
       if($result === "Approved"){
        header("Location:choose.html");
    }
    
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
<script>
alert("sorry you need to complete your tasks to upload your details  . Please suscribe the maximum 5 channels and submit the proof");

    window.location.href="dashboard.php";



    </script>


</html>
