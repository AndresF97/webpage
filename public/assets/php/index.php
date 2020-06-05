<?php

// first step is to label the values for  each input

$name_error = $email_error = $subject_error = $message_error = "";
$mName = $mEmail = $mSubject  = $mMessage = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST["name"] == ""){
       $name_error = "name is required";
    }else{
        $mName = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$mName)) {
            $name_error = "Only letters and white space allowed";
          }
    }
    if($_POST["email"] == ""){
        $email_error = "email is required";
    }else{
        $mEmail = test_input($_POST["email"]);
        if (!filter_var($mEmail, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Invalid email format";
        }
    }
    if($_POST["subject"] == ""){
        $subject_error = "subject is required";
    }else{
        $mSubject = test_input($_POST["subject"]);
    }
    if($_POST["message"] == ""){
        $message_error = "message is required";
    }else{
        $mMessage = test_input($_POST["message"]);
    }
    if($name_error == "" and $email_error == "" and $subject_error == "" and $message_error == ""){
        print_r($_POST);
        $message_body = "";
        unset($_POST['submit']);
        foreach($_POST as $key => $value){
            $message_body .= "$key : $value \n";
        }

        $to= "customerservice@janitor-express.com";
        if(mail($to,$subject,$message)){
            $name = $email= $subject = $message = "";
        }

    }
}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>