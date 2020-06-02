<?php
include(__DIR__ . '/connection.php');
$nameStatus = "";
$emailStatus = "";
$numberStatus = "";
$subjectStatus = "";
$messageStatus = "";
$status = "";
$statusSuccess = "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  
    
    if(empty($name) || empty($email) || empty($number) || empty($subject) ||empty($message)) {
        $status = "*All fields are required";
        while (empty($name)) {
            $nameStatus = "required";
            break;
        }
        while (empty($email)) {
            $emailStatus = "required";
            break;
        }
        while (empty($number)) {
            $numberStatus = "required";
            break;
        }
        while (empty($subject)) {
            $subjectStatus = "required";
            break;
        }
        while (empty($message)) {
            $messageStatus = "required";
            break;
        }
    } else {
        if(strlen($name) >= 255 || !preg_match("/^[a-zA-Z-'\s]+$/", $name)) {
            $status = "*Please enter a valid name";
            $nameStatus = "required";
        } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $status = "*Please enter a valid email";
            $emailStatus = "required";
        } else {
            if(!isset($_POST['agreement'])){
                $status = "*Please make sure to tick the box.";
            } else {
                $sql = "INSERT INTO contacts (name, email, number, subject, message) VALUES (:name, :email, :number, :subject, :message)";

                $stmt = $dbh->prepare($sql);
            
                $stmt->execute(['name' => $name, 'email' => $email, 'number' => $number, 'subject' => $subject, 'message' => $message]);

                $status = "*Your message was sent";
                $statusSuccess = "green";
                $nameStatus = "";
                $emailStatus = "";
                $numberStatus = "";
                $subjectStatus = "";
                $messageStatus = "";
                $name = "";
                $email = "";
                $number = "";
                $subject = "";
                $message = "";
            }
        }
    }

}