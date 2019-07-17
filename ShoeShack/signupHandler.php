<?php
session_start();

$firstname=$email=$lastname=$password="";

if(isset($_POST['signup'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password1 = $_POST['password'];

    if (empty($firstname)) {
        header('location:signup.php?fError');
        exit();
    } else {
        $firstname = $firstname;
    }

    if (empty($lastname)) {
        header('location:signup.php?lError');
        exit();
    } else {
        $lastname = $lastname;
    }

    if (empty($email)) {
        header ('location:signup.php?eError');
        exit();
    } else {
        $email=$email;
    }

    if (empty($password)){
        header('location:signup.php?pError');
    }else{
        $password=md5($password);
    }

    $sql = "INSERT INTO `people`(`id`, `firstname`, `lastname`, `email`, `password`)
                VALUES (null,'$firstname','$lastname','$email','$password')";

    include 'config.php';

    if (mysqli_query($conn, $sql)) {
        echo "User added to the db successfully";
        header("location:index.php");
        $_SESSION['email'] = $email;

    } else {
        echo "Failed to add user to the db";
    }
}


