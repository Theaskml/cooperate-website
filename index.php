
<?php
session_start();
$servername = "sql12.freesqldatabase.com";
$username ="sql12714196";
$password = "WtY2YeQHhm";
$dbname ="sql12714196";


$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn ==false){
    echo "connection failed";
     
}
//if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email =$_POST['email'];
    $contact =$_POST['contact'];
    $password=$_POST['password'];
    $info= "INSERT INTO client_record(name,email,contact,password)
            VALUES ('$name','$email','$contact','$password')";


if(mysqli_query($conn,$info)===true){
    session_start();
            $_SESSION["name"] = $name;
            $_SESSION["email"] = $email;
            header("Location: dashboard.php");
            exit;
}
else{
    echo "error";
}


/*else{
    
    $get ="SELECT name,contact FROM client_record WHERE email =''";

$result=mysqli_query($conn,$get);
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $name = $row['name'];
        $contact =$row['contact'];
    }
}
$case="true";
}*/
?>
