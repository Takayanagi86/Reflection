<?php
include(__DIR__ . '/connection.php');

$status = "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  
    if(!isset($_POST['agreement'])){
        $status = "Please check you agree";
    } else {
        if(empty($name) || empty($email) || empty($message)) {
            $status = "All fields are compulsory.";
        } else {
            if(strlen($name) >= 255 || !preg_match("/^[a-zA-Z-'\s]+$/", $name)) {
            $status = "Please enter a valid name";
            } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $status = "Please enter a valid email";
            } else {

            $sql = "INSERT INTO contacts (name, email, subject, message) VALUES (:name, :email, :subject, :message)";

            $stmt = $pdo->prepare($sql);
            
            $stmt->execute(['name' => $name, 'email' => $email,'subject' => $subject, 'message' => $message]);

            $status = "Your message was sent";
            $name = "";
            $email = "";
            $message = "";
            }
        }
    }

}