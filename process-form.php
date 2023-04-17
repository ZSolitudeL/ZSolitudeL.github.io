<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['fullname'];
    $ic_number = $_POST['ic_number'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $gender = $_POST['gender'];
    $subject = $_POST['subject'];
    $campus = $_POST['campus'];
    $intake = $_POST['intake'];
    
    $to = 'austin0621@1utar.my';
    $subject = 'New Registration Form Submission';
    $message = "Name: $name\nIC Number: $ic_number\nEmail: $email\nPhone Number: $phone_number\nGender: $gender\nSubject: $subject\nCampus: $campus\nIntake: $intake";
    $headers = "From: $email\r\n";
    
    if(mail($to, $subject, $message, $headers)) {
        echo 'Thank you for your submission.';
    } else {
        echo 'Error sending email.';
    }
}
?>

