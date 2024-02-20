<?php
    include 'database.php';

    $username=$_POST['username'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $message=$_POST['message'];

    //users==table_name in database
    $con=mysqli_connect('localhost','root','','contact11');
    $sql="INSERT INTO users(Username, Email, Contact, Address,Message) VALUES('$username', '$email', '$contact', '$address', '$message')";
    $r=mysqli_query($con,$sql);

    if($r){
        header('Location: ./index.php');
    }


?>