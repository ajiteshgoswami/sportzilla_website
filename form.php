<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// MSG SUBJECT
if (empty($_POST["number"])) {
    $errorMSG .= "number is required ";
} else {
    $number = $_POST["number"];
}
if (empty($_POST["message"])) {
    $errorMSG .= "number is required ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "deepakjain.dj2@gmail.com";
$Subject = "You got a new lead for designing";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Contact number: ";
$Body .= $number;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
$Body .= "\n";
$Body .= "All the best Team";

// send email
$success = mail($EmailTo, $Subject, $Body);

// redirect to success page
if ($success && $errorMSG == ""){
   // echo "success";
    header("Location:http://www.sportzilla.in");
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>