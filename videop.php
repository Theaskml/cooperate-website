<?php
$servername = "sql12.freesqldatabase.com";
$username ="sql12714196";
$password = "WtY2YeQHhm";
$dbname ="sql12714196";


session_start();
$email=$_SESSION['email'];
$conn = mysqli_connect($servername,$username,$password,$dbname);
$info="SELECT * FROM client_data WHERE email != '$email'";
$result=mysqli_query($conn,$info);
$ytlink = array();
$videolink = array();
$email2 =  array();
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while($row = mysqli_fetch_array($result)) {
     //echo $row['ytlink']."<br>";
     $ytlink[] =$row['ytlink'];
     $videolink[] = $row['videolink'];
     $email2[]=$row['email'];
     $_SESSION['videolink'] = $videolink;
     $_SESSION['email2']=$email2;
       $_SESSION['ytlink']=$ytlink;
       
      }
      mysqli_free_result($result);
      
    }
    
    else{
      echo "failed".mysqli_error($conn);
    }
    /*$info ="INSERT INTO check_data(email,click)
            VALUES ('$email',)"*/
    header("Location:dashboard.php");
?>
