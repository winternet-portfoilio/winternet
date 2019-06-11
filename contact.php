<?php
if($_POST){
    @$name = $_POST['name'];
    @$email = $_POST['email'];
    @$message = $_POST['message'];
     
$EmailTo = "eminentrafiq@gmail.com";
$Subject = "Message from Website";
 
// prepare email body text
@$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
 
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n"; 
    // send email
    @$success = mail($EmailTo, $Subject, $Body, "From:".$email);
    if ($success){
        echo "your message sent successfully! Our team will get back you soon thanks!";   
    
     }
     else{
         echo "You entered invalid Details";
     }        
}

?>