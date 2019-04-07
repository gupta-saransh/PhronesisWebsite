<?php
// Functions to filter user inputs
function filterName($field){
    // Sanitize user name
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);

    // Validate user name
    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        return $field;
    } else{
        return FALSE;
    }
}
function filterEmail($field){
    // Sanitize e-mail address
    $field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);

    // Validate e-mail address
    if(filter_var($field, FILTER_VALIDATE_EMAIL)){
        return $field;
    } else{
        return FALSE;
    }
}
function filterString($field){
    // Sanitize string
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    if(!empty($field)){
        return $field;
    } else{
        return FALSE;
    }
}

// Define variables and initialize with empty values
$nameErr = $emailErr = $messageErr = $cErr=$iErr="";
$name = $email = $subject = $message = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate user name
    if(empty($_POST["fname"])){
        $nameErr = "All fields must be filled.";
    } else{
        $name = filterName($_POST["fname"]);

    }

    // Validate email address
    if(empty($_POST["Email"])){
        $emailErr = "Please enter your email address.";
    } else{
        $email = filterEmail($_POST["Email"]);
        if($email == FALSE){
            $emailErr = "Please enter a valid email address.";
        }
    }
    if(empty($_POST["Contact"])){
        $cErr = "Please enter your email address.";
    } 
    if(empty($_POST["Institute"])){
        $iErr = "Please enter your email address.";
    } 
    


    // Validate user comment


    // Check input errors before sending email
    if(empty($nameErr) && empty($emailErr)  &&empty($cErr)&&empty($iErr)){
        // Recipient email address
       include 'process1.php';
       $nameErr ="Your Details have been saved!";
       submitf();
    }
}
?>
