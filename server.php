<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Posts";

$connect = mysqli_connect("$servername","$username","$password","$dbname");
if(!$connect){
    echo 'No connection';
}


$message = "";
$errors = array();


if(isset($_POST['upload'])){
    
    
    $target = "images/".basename($_FILES['image']['name']);

    
    $img = $_FILES['image']['name'];
    $message = $_POST['message'];
    
    $qry_insert = "INSERT INTO post VALUES(Null,'$img','$message')";
    $result_insert = mysqli_query($connect,$qry_insert);
    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        header('location:home.php');
    }else{
        array_push($errors,"image could not upload");
    }
}
?>