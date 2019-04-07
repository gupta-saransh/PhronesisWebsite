<?php
/* Attempt MySQL server connection. Assuming you are running MySQL

server with default setting (user 'root' with no password) */
function submitf(){
  $servername = "";
  $username = "";
  $password = "";
  $dbname = "";
$link = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['fname']);
$email = mysqli_real_escape_string($link, $_REQUEST['Email']);
$contact = mysqli_real_escape_string($link, $_REQUEST['Contact']);
$institute = mysqli_real_escape_string($link, $_REQUEST['Institute']);
$sex = mysqli_real_escape_string($link, $_REQUEST['Gender']);

$checkbox1=$_POST['Check'];
$chk="";
foreach($checkbox1 as $chk1)
   {
      $chk = $chk1;
      $in_ch=mysqli_query($link," INSERT INTO IndiMain(Name,Email,Contact,Institute,Sex,Event1) VALUES ('$first_name', '$email', '$contact', '$institute', '$sex','$chk')");

   }

// Close connection
mysqli_close($link);
}
?>
