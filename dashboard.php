<?php
session_start();

$email = $_SESSION["email"];
$name = $_SESSION["name"];
$_SESSION['email'] = $email;
// Check if user is logged in

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
#nav{
    color:red;
    font-size:23px;
  background-color: darkgray;
  border-width: thick;
  border-radius: 30px;
  height:30px;
  margin-right:50px;

}

#tittle{
    text-align:center;
    padding-left:30;
    animation: slideInFromLeft 7s ease forwards;
}
@keyframes slideInFromLeft {
  from {
    opacity: 1; /* Start with opacity 0 */
    transform: translateX(80%); /* Move text 100% of its width to the left */
  }
  to {
    opacity: 1; /* End with opacity 1 */
    transform: translateX(0); /* Bring text back to its original position */
  }
}
#image{
width: 40px;
height:40px;
border-radius:30px;
margin-top:-30px;
margin-left:1120px;
}
#button1{
    margin-top:-10px;
}
#detail{
    margin-left:1010px;
}
/*button{
    border-radius:10px;
    width:40px;
    height:0px;
    margin-left:1080;
}*/
body{
    background-image:url('https://png.pngtree.com/thumb_back/fh260/background/20221027/pngtree-elegant-gradient-black-with-slice-shadow-image_1469341.jpg');
    background-size:cover;
    }
#border{
    
    background-color:white;
    padding-top:10px;
    padding-left:20px;
    margin-top:-360px;
    height:500px;
    width:190px;
    border-radius:30px;
    
}
#info{
    margin-top:-15px;
    margin-bottom:30px;
    margin-left:-15px;
}
#pra{
    font-size:20px;
    padding-top:20px;
    margin-left:200px;
    margin-right:200px;
    color:white;

}
#pragraph{
    padding-top:10px;
    margin-left:200px;
    margin-right:200px;
}
#link{
    height:200px;
    width:400px;
    border-radius:20px;
    margin-bottom:30px;
}
#result{
    margin-left:450px;
    color:red;
    font-size:17px;
}
#back{
    margin-left:125px;
    color:gray;
}
#proof{
    padding-top:10px;
    margin-left:200px;
    margin-right:200px;
    font-size:20px;
    color:white;
}
#proof2{
    padding-top:15px;
    margin-left:345px;
    margin-right:200px;
    color:white;
}
</style>
<body>
    <div id="nav"> 
        <p id="tittle">Welcome to cooperate ,Wish this will Helful for you</p>
    </div>
    <img  id="image" onclick="show1()" ondblclick="hide1()"src="https://www.shutterstock.com/image-vector/blank-avatar-photo-place-holder-260nw-1095249842.jpg"> 
    <h1 style="text-align:center;margin-top:;color:white;">The Co-operate</h1>
    <div id="pra">
        <p>Welcome,</p>
        <p>The main motive of this cooperate is to make a friends among the world and grow your channel.
            Here you need to be friend with all the users.If you help other then you will able to get the help.<br>
            First of all , goto complete task and watch videos and subscribe the channel and take a screenshot.After this goto 
            submit proof and submit all the screenshot one by one according to the needed.And after complete this you can goto choose platform and can share your youtube videos link.
        </p>
        <p>I hope this will be helpful for you .If you wanna know more about it <a href="about.html">click me </a>  </p>
    </div>
    
    <div id="result">
        <p>
            <?php
    $videolink =$_SESSION['videolink'];
    $email2=$_SESSION['email2'];
    $ytlink =$_SESSION['ytlink'];
    $length =count($ytlink);
    for ($i=0; $i < $length; $i++) { 
     echo "<strong style='color:gold;font-size:20px;'>emailaddress:&nbsp;</strong>";
     print_r($email2[$i]);
     echo "<br>";
     echo "<strong style='color:black;font-size:20px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;videolink:</strong>";
        print_r("<a href='".$videolink[$i]."'>".$videolink[$i]."</a>");
        echo"<br>";
        echo "<strong style='color:black;font-size:20px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ytlink:</strong>";
        print_r("<strong><a href='".$ytlink[$i]."'>".$ytlink[$i]."</a></strong>");
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    
    
    ?>

<strong id="back"onclick="show7()">Go back</strong>
     </p>
    </div>
    
    <div id="detail">
        <div id="border">
            <strong onclick="show2()" ondblclick="hide2()">Account detail</strong><br>
            
            <div id="info">
              <br> <li> <strong> NAME: <?php echo $name;?></strong></li>
             <strong>Email:<?php echo $email;?></strong></div>
            <br> <strong onclick="show3()" ondblclick="hide3()">Choose platform</strong>   
             
             <ul id="hidden">
                 <li> <a onclick="youtube()">youtube</a></li> 
           <li><a onclick="facebook()">facebook</a></li>
           <li><a onclick="instragram()">instragram</a></li>  
           
        </ul>
        <br><strong onclick="show5()">complete your task</strong>
      <button  style="background-color:blue;" onclick="show6()" ondblclick="hide6()"></button>
      <ul id="yt">
          <li onclick="youtube2()">youtube</li>
</ul>
<strong onclick="done()">submit your proof<strong>

    </div>
</div>

<div id="submit">
    <p id="proof"> Please submit the screenshot of the subscribed channel for the trust issue .if you have not screen shot it then go to the complete task and click to the links and suscribe the channel and take a screen shot</p>
    <br>
    <form id="proof2" action="upload.php" method="post" enctype="multipart/form-data">
<label for="image" style="color:red;">Submit screenshot</label><br>
<input type="file" name="img" id="img" required><br><br>
<input style="border-radius:8px;'" type="submit">
</form>

</div>







<script>

 document.getElementById("detail").style.display = "none";
  function show1(){
      document.getElementById("detail").style.display = "block";
  }
  function hide1() {
    document.getElementById("detail").style.display = "none";
      
  }
  document.getElementById("info").style.display = "none";
  function  show2() {
    document.getElementById("info").style.display = "block";
      
  }
      
  
  function hide2(){
    document.getElementById("info").style.display = "none";
  }

  document.getElementById("hidden").style.display = "none";
function show3(){
      
            window.location.href='approve.php';  
   
       
}
 

function hide3(){
    document.getElementById("hidden").style.display = "none";

}
function show4() {
    document.getElementById("detail").style.display = "none";
    
}
document.getElementById("pra").style.display="block";

document.getElementById("result").style.display="none";

function show5(){

    window.location.href="videop.php";
} 

document.getElementById("yt").style.display="none";

function show6(){
  document.getElementById("yt").style.display="block";    
   
}
function hide6(){
    document.getElementById("yt").style.display="none";
}

    

function youtube2(){
    document.getElementById("pra").style.display="none";
    document.getElementById("detail").style.display="none";
  document.getElementById("image").addEventListener("click", show4);
  document.getElementById("result").style.display="block";
  
}
function show7(){
    document.getElementById("result").style.display="none";
    document.getElementById("pra").style.display="block";
    document.getElementById("image").removeEventListener("click", show4);
    
    
}
document.getElementById("submit").style.display="none";
function done() {
    document.getElementById("detail").style.display="none";
    document.getElementById("pra").style.display="none";
    document.getElementById("submit").style.display="block";
    document.getElementById("image").addEventListener("click", show4);
    
}


 

</script>



</body>
</html>