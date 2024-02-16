<?php

include('connect.php');
session_start();
$id= $_SESSION['users'];
$uname= $_SESSION['username'];
$uemail= $_SESSION['useremail'];
$uphone= $_SESSION['userphone'];

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/SMTP.php';

if(isset($_GET['db'])){
    $pid=$_GET['db'];
    $_SESSION['pid']=$pid;
    $sql ="SELECT * FROM users, userpost WHERE users.uid=userpost.did and pid='$pid'";
    $result=mysqli_query($conn,$sql);
    if($result){
        $rows = mysqli_fetch_assoc($result);
        $dealeremail = $rows['email'];
        echo $dealeremail;
    }
                // $mail = new PHPMailer(true);
                // $mail->isSMTP();
                // $mail->Host = 'smtp.gmail.com';
                // $mail->SMTPAuth = true;
                // $mail->Username = 'findroomnp@gmail.com';
                // $mail->Password = 'uhty dkrt kish gwfz';
                // $mail->SMTPSecure = 'ssl';
                // $mail->Port = 465;
    
                // $mail->setFrom('findroomnp@gmail.com');
                // $mail->addAddress($rows["email"]);
                // $mail->isHTML(true);
                // $mail->Subject = "User Deal";
                // $mail->Body = "<p>Dear user, a user wants to make a deal in the post you created.<br>Please login to your account for further information.<br>Thank you</p>";
                // $mail->send();
        // header("Location:userdash.php");
} 
?>