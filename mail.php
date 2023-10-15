<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $topic = $_POST['subject'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $con = new mysqli("localhost", "root", "", "apointment_list");
}

if($con) {

    $sql = "INSERT INTO `contact_us` (name, email, subject, phone, message) VALUES ('$name', '$email', '$topic', '$phone', '$message');";

    $result = mysqli_query($con, $sql);

} else {
    die(mysqli_error($conx));
}

?>
