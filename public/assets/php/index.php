<?php
print_r($_POST);
// first step is to label the values for  each input
$name = $email = $subject  = $message = "";
// if($_SERVER["REQUEST METHOD"] == "POST"){
//     if(empty($_POST["name"])){
//         $name_error = "name is required";
//     }else{
//         $name = test_input($_POST["name"]);
//         if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
//             $name_error = "Only letters and white space allowed";
//           }
//     }
//     if(empty($_POST["email"])){
//         $email_error = "email is required";
//     }else{
//         $email = test_input($_POST["email"]);
//         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $email_error = "Invalid email format";
//         }
//     }
//     if(empty($_POST["subject"])){
//         $subject_error = "subject is required";
//     }else{
//         $subject = test_input($_POST["subject"]);
//     }
//     if(empty($_POST["message"])){
//         $message_error = "message is required";
//     }else{
//         $message = test_input($_POST["message"]);
//     }
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mail= $_POST['mail'];
    $subject= $_POST['subject'];
    $message = $_POST['message'];
    
    $mailTo = 'andresdudex@hotmail.com';
    $headers ='from '.$mail;
    $txt = "new message from".$name.".\n\n".$message;
    mail($mailTo,$subject,$txt,$headers);
    $name = $email = $subject = $message = "";
}
    // $mailTo = "andresdudex@hotmail.com";
    // if(mail($to,$subject,$name,$message)){
    //     //later add on success message here
    //     $name = $email = $subject = $message = "";
    // }
//}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>