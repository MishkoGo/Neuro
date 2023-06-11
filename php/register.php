<?php
    require_once('db.php');

$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$organization = $_POST['organization'];
$number = $_POST['number'];

if(empty($name) || empty($email) || empty($password) || empty($organization)){
    echo "Заполните все поля";
}
else{
    $sql = "INSERT INTO `users` (email,name,password,organization,number) VALUES ('$email', '$name', '$password', '$organization', '$number')";
    if($conn -> query($sql) === TRUE){
       ob_start();
       header('Location: ' . 'http://neurosmeta/');
       ob_end_flush();
    }
    else{
        echo $conn->error;
    }
   ;
}




