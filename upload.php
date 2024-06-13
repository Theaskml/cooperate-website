
<?php
session_start();
$servername = "sql105.infinityfree.com";
$username ="if0_36710490";
$password = "Saugat980";
$dbname ="if0_36710490_Client_details";

$conn = mysqli_connect($servername,$username,$password,$dbname);
$email=$_SESSION['email'];
$image =$_FILES['img']['tmp_name'];
$imgContent=addslashes(file_get_contents($image));
$info="INSERT INTO images (email,image)
         VALUES('$email','$image')";
   mysqli_query($conn,$info);

   
            $info = "INSERT INTO check_result(email,result)
                   VALUES('$email','Approved')";
                  if( mysqli_query($conn,$info)){
                      header("Location:dashboard.php");
                  }
        
?>