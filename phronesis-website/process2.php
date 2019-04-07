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
$team_name = mysqli_real_escape_string($link, $_REQUEST['tname']);
$first_name = mysqli_real_escape_string($link, $_REQUEST['fname']);
$email = mysqli_real_escape_string($link, $_REQUEST['Email']);
$contact = mysqli_real_escape_string($link, $_REQUEST['Contact']);
$institute = mysqli_real_escape_string($link, $_REQUEST['Institute']);
$sex = mysqli_real_escape_string($link, $_REQUEST['Gender']);

$first_name1 = mysqli_real_escape_string($link, $_REQUEST['fname1']);
$email1 = mysqli_real_escape_string($link, $_REQUEST['Email1']);
$contact1= mysqli_real_escape_string($link, $_REQUEST['Contact1']);
$institute1 = mysqli_real_escape_string($link, $_REQUEST['Institute1']);
$sex1 = mysqli_real_escape_string($link, $_REQUEST['Gender1']);

// Attempt insert query execution
$checkbox1=$_POST['Check'];
$chk="";
foreach($checkbox1 as $chk1)
   {
      $chk = $chk1;
      $in_ch=mysqli_query($link," INSERT INTO TeamMain(TeamName,Name1,Email1,Contact1,Institute1,Sex1,Name2,Email2,Contact2,Institute2,Sex2,Event1) VALUES ('$team_name','$first_name', '$email', '$contact', '$institute', '$sex','$first_name1', '$email1', '$contact1', '$institute1', '$sex1','$chk')");

   }

// Close connection
mysqli_close($link);
}
?>
