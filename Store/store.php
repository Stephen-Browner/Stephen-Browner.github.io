<?php 

$email = $_POST['email']; 
$subject = $_POST['subject'];
$message = $_POST['message'];



$errors = 0;
$errorMessage = "";


//server side error checking

if ($email == "") {$errors = 1; $errorMessage = "Email Required";}
if ($subject == "") {$errors = 1; $errorMessage = "Subject Required";}
if ($message == "") {$errors = 1; $errorMessage = "Message Required";}


if ($errors != 0)

{
    echo "errors detected: $errorMessage";
}
else 
{
    
    echo "Send successful";
}    

    


?>